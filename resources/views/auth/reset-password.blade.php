<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg border border-red-300">
        <h2 class="text-2xl font-bold text-center text-red-700 mb-6">Reset Your Password</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-red-700 font-semibold" />
                <x-text-input id="email" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500"
                              type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('New Password')" class="text-red-700 font-semibold" />
                <x-text-input id="password" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500"
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-red-700 font-semibold" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-red-300 focus:border-red-500 focus:ring-red-500"
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <div class="flex items-center justify-center mt-6">
                <x-primary-button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
