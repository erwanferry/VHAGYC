<x-guest-layout>
    <x-auth-card>
        <div class="welcome">
        <x-slot name="logo">
            <a href="/">
                

            </a>
        </x-slot>
        <div class="overlay">    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" style="margin-left: 162px"/>
                
                <x-input id="name"  type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4" style="margin-left: '155px'">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email"  type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div  style="margin-left: '96px'  ">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input style="border: 5px" id="password"   style="background-color: white;"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div >
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                <x-input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <br>
            <div  style="text-align: '50px'">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déja inscrit ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __("S'incrire") }}
                </x-button>
            </div>
        </form>
        </div>
        </div>
    </x-auth-card>
</x-guest-layout>
