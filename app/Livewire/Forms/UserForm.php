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
  

    public function rules(): array
    {
        // Se estiver editando, ignore o email atual do usuário

        return [
			'name' => 'required|string',
            'email' => 'string|email',
            'password' => 'required|string|min:8',
        ];
    }

    public function setUserModel(User $userModel): void
    {
        $this->userModel = $userModel;
        
        $this->name = $this->userModel->name;
        $this->email = $this->userModel->email;
        $this->password = $this->userModel->password;
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

