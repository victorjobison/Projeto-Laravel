<div class="space-y-2">
    <div>
        <x-label for="name" :value="__('Name')"/>
        <x-input wire:model="form.name" id="name" name="name" type="text" class=" mt-1 block w-full"  :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="email" :value="__('Email')"/>
        <x-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" required placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="password" :value="__('Password')"/>
        <x-input wire:model="form.password" id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="password" required placeholder="Password"/>
        @error('form.password')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div class="flex items-center gap-4">
        <x-button
            class="w-full group relative overflow-hidden bg-gray-600 focus:ring-4 focus:ring-gray-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center">
            <span class="z-40">Submit</span>
            <div
                class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
            </div>
        </x-button>
    </div>
</div>