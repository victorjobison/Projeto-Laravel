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

    #[Layout('layouts.app')]
    public function render(): View
    {
        $users = User::paginate();

        return view('livewire.user.index', compact('users'))
            ->with('i', $this->getPage() * $users->perPage());
    }

    public function delete(User $user)
    {
        $user->delete();

        return $this->redirectRoute('users.index', navigate: true);
    }
}
