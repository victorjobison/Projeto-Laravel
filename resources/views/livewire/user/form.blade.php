<div class="space-y-6">
    <div>
        <x-label for="name" :value="__('Name')"/>
        <x-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full"  :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
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
        <x-button>Submit</x-button>
    </div>
</div>