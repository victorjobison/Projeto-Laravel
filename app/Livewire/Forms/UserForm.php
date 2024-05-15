<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $userModel;
    
    public $name = '';
    public $email = '';
    public $current_team_id = '';
    public $profile_photo_path = '';
    public $two_factor_secret = '';
    public $two_factor_recovery_codes = '';
    public $two_factor_confirmed_at = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'email' => 'required|string',
			'profile_photo_path' => 'string',
			'two_factor_secret' => 'string',
			'two_factor_recovery_codes' => 'string',
        ];
    }

    public function setUserModel(User $userModel): void
    {
        $this->userModel = $userModel;
        
        $this->name = $this->userModel->name;
        $this->email = $this->userModel->email;
        $this->current_team_id = $this->userModel->current_team_id;
        $this->profile_photo_path = $this->userModel->profile_photo_path;
        $this->two_factor_secret = $this->userModel->two_factor_secret;
        $this->two_factor_recovery_codes = $this->userModel->two_factor_recovery_codes;
        $this->two_factor_confirmed_at = $this->userModel->two_factor_confirmed_at;
    }

    public function store(): void
    {
        $this->userModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->userModel->update($this->validate());

        $this->reset();
    }
}
