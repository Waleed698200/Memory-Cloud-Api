<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ChatSessionController extends Controller
{
    public function index(Request $request)
    {
        $sessions = $request->user()
            ->chatSessions()
            ->orderByDesc('last_message_at')
            ->orderByDesc('updated_at')
            ->get();

        return response()->json($sessions);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:50'],
        ]);

        $session = $request->user()->chatSessions()->create([
            'title' => $data['title'] ?? 'New Chat',
            'status' => $data['status'] ?? 'active',
        ]);

        return response()->json($session, 201);
    }

    public function show(Request $request, int $id)
    {
        $session = $request->user()
            ->chatSessions()
            ->with(['messages' => function ($query): void {
                $query->orderBy('created_at');
            }])
            ->findOrFail($id);

        return response()->json($session);
    }

    public function storeMessage(Request $request, int $id)
    {
        $data = $request->validate([
            'role' => ['required', 'string', 'max:50', Rule::in(['user', 'assistant', 'system'])],
            'content' => ['required', 'string'],
            'attachment_url' => ['nullable', 'string', 'max:2048'],
            'attachment_type' => ['nullable', 'string', 'max:100'],
            'metadata' => ['nullable', 'array'],
        ]);

        $session = $request->user()->chatSessions()->findOrFail($id);

        $message = $session->messages()->create($data);
        $session->forceFill(['last_message_at' => now()])->save();

        return response()->json($message, 201);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'max:50', Rule::in(['active', 'archived'])],
        ]);

        if ($data === []) {
            return response()->json(['message' => 'No fields to update.'], 422);
        }

        $session = $request->user()->chatSessions()->findOrFail($id);
        $session->fill($data);
        $session->save();

        return response()->json($session);
    }

    public function destroy(Request $request, int $id)
    {
        $session = $request->user()->chatSessions()->findOrFail($id);
        $session->update(['status' => 'archived']);
        $session->delete();

        return response()->noContent();
    }
}
