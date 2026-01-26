<x-app-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-500">Memoria Cloud</p>
            <h2 class="mt-2 text-2xl font-semibold text-slate-900">
                {{ __('Your storytelling dashboard') }}
            </h2>
            <p class="mt-1 text-sm text-slate-600">Capture memories one prompt at a time and build a legacy for your family.</p>
        </div>
    </x-slot>

    <div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-welcome />
        </div>
    </div>
</x-app-layout>
