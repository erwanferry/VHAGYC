<x-guest-layout>
    <x-auth-card>
        <div class="welcome">
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>
        <div class="overlay">    
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Veuillez entrer votre adresse e-mail pour récuperer votre compte.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" style="margin-right: 49px" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Envoyer le mail de récuperation') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>
    </x-auth-card>
</x-guest-layout>
