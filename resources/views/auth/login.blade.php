<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" name="signInForm" ng-app="login" ng-controller="loginController">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input type="email" name="email" ng-model="inputs.email.value" ng-model-options="{ debounce: 400 }" ng-pattern="inputs.email.pattern" ng-minlength="5" n g-required="true" id="email" class="block mt-1 w-full" :value="old('email')" autofocus autocomplete="username" />

            <ng-messages for="signInForm.email.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="pattern">please enter a valid email</span>
            </ng-messages>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" input="password" ng-model="inputs.password.value" ng-model-options="{ debounce: 400 }" ng-pattern="/^([^A-Z]*[A-Z][^A-Z]*){2}.*$/" ng-minlength="5" ng-required="true" />

            <ng-messages for="signInForm.password.$error" class="text-red-400 font-bold" role="alert" ng-cloak>
                <ng-message when="minlength">Your password is too short</ng-message>
                <ng-message when="pattern">
                    Your password should have at least 2 capital letters
                </ng-message>
            </ng-messages>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="ms-3">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>

<script>
    const loginPage = angular.module('login', ['ngMessages']);

    loginPage.controller('loginController', ['$scope', function($scope) {
        $scope.inputs = {
            email: {
                pattern: /^(([^<>()\[\]\.,;:\s@\”]+(\.[^<>()\[\]\.,;:\s@\”]+)*)|(\”.+\”))@(([^<>()[\]\.,;:\s@\”]+\.)+[^<>()[\]\.,;:\s@\”]{2,})$/i
            },
            password: {
                pattern: /^([^A-Z]*[A-Z][^A-Z]*){2}.*$/
            }
        }
    }])
</script>