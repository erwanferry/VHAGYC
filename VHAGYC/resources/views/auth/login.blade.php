<x-guest-layout>
    <x-auth-card>
        <div class="welcome">
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>
        <div class="overlay">    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="connection_email">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
                <x-label for="email" :value="__('Email')" />
                <br>
                <x-input id="email"  style="margin-left: '100px'" type="email" name="email" :value="old('email')" required autofocus />

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Mot de passe')" />
                <br>
                <x-input id="password" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div >
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>
        </div>
    </x-auth-card>
</x-guest-layout>
