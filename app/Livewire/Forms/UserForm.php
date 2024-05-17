<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $userModel;
    
    public $name = '';
    public $email = '';
    public $password = '';
    public $current_team_id = '';
  

    public function rules(): array
    {
        return [
			'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'current_team_id' => 'required|int',
        ];
    }

    public function setUserModel(User $userModel): void
    {
        $this->userModel = $userModel;
        
        $this->name = $this->userModel->name;
        $this->email = $this->userModel->email;
        $this->password = $this->userModel->password;
        $this->current_team_id = $this->userModel->current_team_id;
       
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
