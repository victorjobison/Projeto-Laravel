<x-guest-layout>
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>
    <!-- Creat By Joker Banny -->
    <div class="min-h-screen bg-fundo flex justify-center items-center">
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -top-0 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -bottom-0 -right-0 transform rotate-12 hidden md:block"></div>
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form class=" py-12 px-12 bg-white rounded-2xl shadow-xl z-20" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer flex justify-center">
                <x-application-mark/>
                </h1>
                <p class="text-center">Criar uma conta para iniciar sua sessão</p>
            </div>
            <br>
            <div class="space-y-4">
                <x-label for="name" value="{{ __('Nome') }}" />
                <x-input id="name" placeholder="Nome" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input  placeholder="Email" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" type="email" name="email" :value="old('email')" required autocomplete="username"  />
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input type="password" name="password" required autocomplete="current-password"  placeholder="Senha" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                <x-label for="password_confirmation" value="{{ __('Confirme a Senha') }}" />
                <x-input id="password_confirmation" placeholder="Confirme a Senha" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            
                <x-validation-errors class="mb-4" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="text-center mt-6">
                <x-button class="w-full py-2 text-white bg-orange-400 rounded-lg hover:bg-orange-500 transition-all">{{ __('Registrar-se') }}</x-button>
                    <p class="mt-4 text-sm">Tem uma conta? 
                        <span class="underline  cursor-pointer"> 
                            <a href="{{ Route('login') }}">
                                Conecte-se
                            </a>
                        </span>
                    </p>
            </div>
        </form>
    </div>
</x-guest-layout>
                    