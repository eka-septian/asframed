<x-guest-layout>
    <div class="mb-4 text-center space-y-2">
        <h1 class="text-3xl font-bold">Sign Up</h1>
    </div>
    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label class="" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label class="" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label class="" for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label class="" for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button>
            Sign Up
        </x-primary-button>

        <div class="text-center text-sm text-gray-500">
            <div class="">Already have an account? <a href="{{ route('login') }}" class="underline font-semibold text-black">Log In</a></div>
        </div>
    </form>
</x-guest-layout>
