<x-guest-layout>
    <!-- Creat By Joker Banny -->
    <div class="min-h-screen h-full bg-fundo flex justify-center items-center bottom-0 ">
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -top-0 -left-16 z-0 transform rotate-45 hidden md:block"></div>
        <div class="absolute w-48 h-48 rounded-xl bg-orange-300 -bottom-0 -right-0 transform rotate-12  md:block"></div>
        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <div class="flex w-96 h-96 items-center">
            <form class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="space-y-4">
                    <h1 class="text-2xl font-bold text-center mb-4 cursor-pointer flex justify-center">
                    <x-application-mark/>
                    </h1>
                    <p class=""> {{ __('Informe seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova.') }}
                </div>
                <br>
                <div class="space-y-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <input id="email" class="w-full" class="form control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

        
                <div class="text-center mt-6">
                    <x-validation-errors class="mb-4" />
                    <x-button class="w-full py-2 text-center text-white bg-orange-400 rounded-lg hover:bg-orange-500 transition-all active:bg-orange-500">                    {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </form>
        </div>
        
    </div>
</x-guest-layout>



