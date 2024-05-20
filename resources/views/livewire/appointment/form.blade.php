
<div class="space-y-2">
    
    <div>
        <x-label for="title" :value="__('Title')"/>
        <x-input wire:model="form.title" id="title" name="title" type="text" class="mt-1 block w-full" autocomplete="title" placeholder="Title"/>
       
    </div>
    <div>
        <x-label for="description" :value="__('Description')"/>
        <x-input wire:model="form.description" id="description" name="description" type="text" class="mt-1 block w-full" autocomplete="description" placeholder="Description"/>
       
    </div>
    <div>
        <x-label for="date" :value="__('Date')"/>
        <x-input wire:model="form.date" id="date" name="date" type="date" class="mt-1 block w-full" autocomplete="date" placeholder="Date"/>
        
    </div>
    <div>
        <x-label for="time" :value="__('Time')"/>
        <x-input wire:model="form.time" id="time" name="time" type="time" class="mt-1 block w-full" autocomplete="time" placeholder="Time"/>
        
    </div>
    <x-validation-errors class="mb-4" />

    <button
        class="w-full items-center px-5 py-2 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        <span class="z-40">Submit</span>
    <button>
</div>
