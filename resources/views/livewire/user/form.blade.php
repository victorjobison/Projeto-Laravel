<div class="space-y-2">
    <div>
        <x-label for="name" :value="__('Name')"/>
        <x-input wire:model="form.name" id="name" name="name" type="text" class=" mt-1 block w-full"  :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
       
    </div>
    <div>
        <x-label for="email" :value="__('Email')"/>
        <x-input wire:model="form.email" id="email" name="email" :value="old('email')" type="text" class="mt-1 block w-full" autocomplete="email" required placeholder="Email"/>
       
    </div>
    <div>
        <x-label for="password" :value="__('Password')"/>
        <x-input wire:model="form.password" id="password" name="password" type="password" :value="old('password')" class="mt-1 block w-full" autocomplete="password" required placeholder="Password"/>
       
    </div>
    <x-validation-errors class="mb-4" />

    <button
        class="w-full items-center px-5 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        <span class="z-40">Submit</span>
    <button>
</div>