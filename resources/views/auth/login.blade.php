<x-guest-layout>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
        <section class="bg-white dark:bg-gray-900">
            <div class="flex justify-center min-h-screen">
                <div  class="hidden bg-cover lg:block lg:w-2/5">
                    <x-application-fundo-login />
                </div>

                <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                    <div class="w-full">
                        <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                            DMZ Appointments
                        </h1>

                        <p class="mt-4 text-gray-500 dark:text-gray-400">
                        Vamos preparar tudo para que você possa verificar sua conta pessoal e começar a configurar seu perfil.                        </p>

                        <div class="mt-6">
                            <h1 class="text-gray-500 dark:text-gray-300"></h1>

                        </div>

                        @session('status')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ $value }}
                            </div>
                        @endsession

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif

                                <x-button class="ms-4">
                                    {{ __('Entrar') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
</x-guest-layout>
