<x-guest-layout>
    <form method="POST" action="{{ route('sign-up') }}" name="signUpForm" ng-app="signUp" ng-controller="signUpController" ng-model-options="{ debounce: 400 }">
        @csrf

        <h2 class="text-center font-bold text-2xl">Sign up for free!</h2>
        <!-- Name -->
        <div class="mt-6">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" :value="old('name')" ng-model="inputs.values.name" ng-minlength="5" ng-required="true" autofocus placeholder="ex: John Ocean" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <ng-messages for="signUpForm.name.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="minlength">Your name is too short. Please provide your first and at least one surname</ng-message>
            </ng-messages>
        </div>

        <!-- Codename -->
        <div class="mt-4">
            <x-input-label for="codename" :value="__('Codename')" />
            <x-text-input id="codename" name="codename" type="text" class="block mt-1 w-full" ng-model="inputs.values.codename" ng-minlength="4" ng-required="true" :value="old('codename')" placeholder="ex: Mister Universe" />
            <x-input-error :messages="$errors->get('codename')" class="mt-2" />

            <ng-messages for="signUpForm.codename.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="minlength">Your codename is too short!</ng-message>
            </ng-messages>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="block mt-1 w-full" ng-model="inputs.values.email" ng-required="true" ng-pattern="inputs.patterns.email" :value="old('email')" placeholder="ex: johnocean@heroes.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <ng-messages for="signUpForm.email.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="pattern">please enter a valid email</ng-message>
            </ng-messages>
        </div>

        <!-- Photo -->
        <div class="mt-4">
            <x-input-label for="photo" :value="__('Photo')" />
            <x-text-input id="photo" type="url" class="block mt-1 w-full " name="photo" ng-model="inputs.values.photo" ng-pattern="inputs.patterns.photo" :value="old('photo')" />
            <x-input-error :messages="$errors->get('photo')" class="mt-2" />

            <ng-messages for="signUpForm.photo.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="pattern">Url is not valid! Please make sure you copy paste it properly.</ng-message>
            </ng-messages>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" class="block mt-1 w-full" name="password" ng-model="inputs.values.password" ng-pattern="inputs.patterns.password" ng-minlength="5" ng-required="true" placeholder="********" />
            <x-input-error :messages="$errors->get('password')" />

            <ng-messages for="signUpForm.password.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="minlength">Your password should have at least 5 characters</ng-message>
                <ng-message when="pattern">Your password should have at least 2 capital letters.</ng-message>
            </ng-messages>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" class="block mt-1 w-full" name="password_confirmation" required autocomplete="new-password" placeholder="********" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- PhoneNumber -->
        <div class="mt-4">
            <x-input-label for="phoneNumber" :value="__('Phone Number')" />
            <x-text-input id="phoneNumber" type="tel" class="block mt-1 w-full" name="phoneNumber" ng-model="inputs.values.phoneNumber" ng-pattern="inputs.patterns.phoneNumber" placeholder="ex: 21998816655" />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />

            <ng-messages for="signUpForm.phoneNumber.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="pattern">please, provide a valid phone number (Brazilian standard)</ng-message>
            </ng-messages>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
    const signUpPage = angular.module('signUp', ['ngMessages']);

    signUpPage.controller('signUpController', ['$scope',
        function($scope) {
            $scope.inputs = {
                patterns: {
                    email: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
                    photo: /(https):\/\/[^ "]/,
                    phoneNumber: /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/,
                    password: /^([^A-Z]*[A-Z][^A-Z]*){2}.*$/
                }
            }
        }
    ])
</script>