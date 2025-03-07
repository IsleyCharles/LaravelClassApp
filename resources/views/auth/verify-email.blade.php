<x-guest-layout>
    <div class="max-w-lg mx-auto mt-10 bg-white p-8 shadow-lg rounded-lg border border-red-300">
        <h2 class="text-2xl font-bold text-center text-red-700 mb-4">Verify Your Email</h2>

        <p class="text-sm text-gray-700 text-center mb-6">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm text-green-600 font-medium text-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-6 flex items-center justify-center space-x-4">
            <!-- Resend Verification Button -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg transition">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-800 underline text-sm">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
