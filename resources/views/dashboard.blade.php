<x-app-layout>
    <x-slot name="header">
        <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-slate-950 via-indigo-950 to-slate-900 p-6 shadow-2xl ring-1 ring-white/10 sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-indigo-200/80">Memoria Cloud</p>
            <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">
                {{ __('Your storytelling dashboard') }}
            </h2>
            <p class="mt-2 text-sm text-indigo-100/90 sm:text-base">
                Capture memories one prompt at a time and build a legacy for your family.
            </p>
        </div>
    </x-slot>

    <div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-welcome />
        </div>
    </div>
</x-app-layout>
