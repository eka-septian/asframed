<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mb-4 text-center space-y-2">
        <h1 class="text-3xl font-extrabold">Log in</h1>
    </div>
    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label class="" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div>
            <x-input-label class="" for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <x-primary-button>
            {{ __('Log in') }}
        </x-primary-button>
        <!-- Remember Me -->
        <div class="text-sm">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 shadow-sm" name="remember">
                <span class="ml-2 text-sm ">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="text-center text-sm text-gray-500">
            <div class="">Don't have an acoount yet? <a href="{{ route('register') }}" class="underline font-semibold text-black">Sign Up</a></div>
            <a class="text-blue-600 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-900"
                href="{{ route('password.request') }}">
                Forgot your password?
            </a>
        </div>
    </form>
</x-guest-layout>
