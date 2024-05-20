<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
 
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    #[Layout('layouts.app')]
    public function render(): View
    {  
        return view('livewire.user.index', [
            'users' => User::search('name', $this->search)->paginate(5),
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();

        return $this->redirectRoute('users.index', navigate: true);
    }
}
