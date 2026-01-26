<?php

namespace App\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that redirects to the Next.js frontend.
     */
    public function toResponse($request): JsonResponse|\Illuminate\Http\RedirectResponse
    {
        $redirectUrl = config('app.frontend_url');

        if ($request->wantsJson()) {
            return response()->json([
                'redirect' => $redirectUrl,
            ]);
        }

        return redirect()->away($redirectUrl);
    }
}
