<x-guest-layout class="bg-fundo">
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>
    <!-- Creat By Joker Banny -->
    <div class="min-h-screen h-full bg-gradient-to-t from-orange-200 to-stone-50 flex justify-center items-center bottom-0 ">
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -top-0 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -bottom-0 -right-0 transform rotate-12  md:block"></div>
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form class="w-96 h-46 py-12 px-12 bg-white rounded-2xl shadow-xl z-20" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="titlogin">
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer flex justify-center">
                <x-application-mark/>
                </h1>
                <p class="text-center">Faça login para iniciar sua sessão</p>
            </div>
            <x-validation-errors class="mb-4" />

            <div class="space-y-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input  placeholder="Email" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" type="email" name="email" :value="old('email')" required autocomplete="username"  />
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input type="password" name="password" required autocomplete="current-password"  placeholder="Senha" class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
            
            </div>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif

            <div class="text-center mt-6">

                <x-button class="w-full py-2 text-center text-white bg-orange-400 rounded-lg hover:bg-orange-500 transition-all active:bg-orange-500">{{ __('Entrar') }}</x-button>
    
                <p class="mt-4 text-sm">Não tem uma conta? 
                    <span class="underline  cursor-pointer"> 
                        <a href="{{ Route('register') }}">
                            Cadastre-se
                        </a>
                    </span>
                </p>
            </div>
        </form>
    </div>
</x-guest-layout>
