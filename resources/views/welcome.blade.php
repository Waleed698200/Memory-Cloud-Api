<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-blue-500 rounded-2xl blur opacity-20"></div>
                <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-4 shadow-xl">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-600 to-blue-500 flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-slot>

        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-3">Welcome to Memoria Cloud</h1>
            <p class="text-gray-600">Capture your life story with guided prompts, smart organization, and a beautiful legacy archive.</p>
        </div>

        <div class="grid gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="w-full inline-flex justify-center items-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L7 19.75m0 0L4.25 17M7 19.75V4.5m6 15.25H19a2 2 0 002-2V9a2 2 0 00-2-2h-5" />
                        </svg>
                        Go to dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="w-full inline-flex justify-center items-center py-3 px-4 border border-purple-200 rounded-xl shadow-sm text-sm font-medium text-purple-700 bg-white hover:bg-purple-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.657 1.343-3 3-3m0 0c1.657 0 3 1.343 3 3m-3-3v8m-4 4h8a2 2 0 002-2v-6a2 2 0 00-2-2h-8a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="w-full inline-flex justify-center items-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            Create your account
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <div class="text-lg font-bold text-purple-600">10K+</div>
                    <div class="text-xs text-gray-600">Biographies Created</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-blue-600">99%</div>
                    <div class="text-xs text-gray-600">Accuracy Rate</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-green-600">4.9★</div>
                    <div class="text-xs text-gray-600">User Rating</div>
                </div>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>

