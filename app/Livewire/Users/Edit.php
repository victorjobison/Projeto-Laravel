<?php

namespace App\Livewire\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public UserForm $form;

    public function mount(User $user)
    {
        $this->form->setUserModel($user);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('users.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.user.edit');
    }
}
