<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Appointments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form wire:submit="save">
                    <input type="text" wire:model.live="title">
                
                    <input type="text" wire:model.live="description">

                    <input type="date" wire:model.live="date">
                    
                    <input type="time" wire:model.live="time">
                
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>