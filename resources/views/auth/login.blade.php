<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 shadow-xl rounded-lg border-2 border-red-400">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="text-3xl font-extrabold text-center text-red-700 mb-6">Welcome Back</h2>
        <p class="text-center text-gray-600 mb-6">Log in to access your account</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-red-700 font-semibold"/>
                <x-text-input id="email" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg" 
                              type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-red-700 font-semibold"/>
                <x-text-input id="password" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500 rounded-lg"
                              type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-red-300 text-red-600 shadow-sm focus:ring-red-500" name="remember">
                    <span class="ms-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-red-600 hover:text-red-800 transition" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="mt-6 flex justify-center">
                <x-primary-button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg shadow-lg transition-all duration-300 ease-in-out">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
