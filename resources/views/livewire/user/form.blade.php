<div class="space-y-6">
    
    <div>
        <x-label for="name" :value="__('Name')"/>
        <x-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="email" :value="__('Email')"/>
        <x-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="current_team_id" :value="__('Current Team Id')"/>
        <x-input wire:model="form.current_team_id" id="current_team_id" name="current_team_id" type="text" class="mt-1 block w-full" autocomplete="current_team_id" placeholder="Current Team Id"/>
        @error('form.current_team_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-label for="profile_photo_path" :value="__('Profile Photo Path')"/>
        <x-input wire:model="form.profile_photo_path" id="profile_photo_path" name="profile_photo_path" type="text" class="mt-1 block w-full" autocomplete="profile_photo_path" placeholder="Profile Photo Path"/>
        @error('form.profile_photo_path')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    
    <div class="flex items-center gap-4">
        <x-button>Submit</x-button>
    </div>
</div>