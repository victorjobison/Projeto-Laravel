<div class="space-y-2">
    
    <div>
        <x-label for="title" :value="__('Title')"/>
        <x-input wire:model="form.title" id="title" name="title" type="text" class="mt-1 block w-full" autocomplete="title" placeholder="Title"/>
        @error('form.title')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="description" :value="__('Description')"/>
        <x-input wire:model="form.description" id="description" name="description" type="text" class="mt-1 block w-full" autocomplete="description" placeholder="Description"/>
        @error('form.description')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="date" :value="__('Date')"/>
        <x-input wire:model="form.date" id="date" name="date" type="date" class="mt-1 block w-full" autocomplete="date" placeholder="Date"/>
        @error('form.date')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="time" :value="__('Time')"/>
        <x-input wire:model="form.time" id="time" name="time" type="time" class="mt-1 block w-full" autocomplete="time" placeholder="Time"/>
        @error('form.time')
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