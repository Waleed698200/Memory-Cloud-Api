<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-blue-500 rounded-2xl blur opacity-20"></div>
                <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-4 shadow-xl">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-600 to-blue-500 flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-validation-errors class="mb-6" />

        @session('status')
            <div class="mb-6 text-sm font-medium text-emerald-600">
                {{ $value }}
            </div>
        @endsession

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Reset your password</h1>
            <p class="text-gray-600">We will email you a secure reset link.</p>
        </div>

        <div class="mb-6 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email Address') }}" class="text-sm font-medium text-gray-900 mb-2 flex items-center gap-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </x-label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <x-input
                        id="email"
                        class="block mt-1 w-full pl-10 py-3 border-gray-300 rounded-xl focus:border-purple-500 focus:ring focus:ring-purple-200 focus:ring-opacity-50 transition duration-200"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="you@email.com"
                    />
                </div>
            </div>

            <div class="flex flex-col space-y-4">
                <x-button class="w-full justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h.01M12 12h.01M8 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.95L3 20l1.595-3.193A7.61 7.61 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    {{ __('Email Password Reset Link') }}
                </x-button>

                <div class="text-center">
                    <a class="inline-flex items-center text-sm font-medium text-purple-600 hover:text-purple-500 transition duration-200" href="{{ route('login') }}">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Back to sign in') }}
                    </a>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
