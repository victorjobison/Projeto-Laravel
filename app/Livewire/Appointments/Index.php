<?php
namespace App\Livewire\Appointments;

use App\Models\Appointment;
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
        return view('livewire.appointment.index', [
            'appointments' => Appointment::search('title', $this->search)
                          ->orderBy('title') // Ordena pelo campo 'id'
                          ->paginate(5),
        ]);
        
    }
    public function delete(Appointment $appointment)
    {
        $appointment->delete();

        return $this->redirectRoute('appointments.index', navigate: true);
    }
}
