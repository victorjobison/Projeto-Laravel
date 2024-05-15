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

    #[Layout('layouts.app')]
    public function render(): View
    {
        $appointments = Appointment::paginate();

        return view('livewire.appointment.index', compact('appointments'))
            ->with('i', $this->getPage() * $appointments->perPage());
    }

    public function delete(Appointment $appointment)
    {
        $appointment->delete();

        return $this->redirectRoute('appointments.index', navigate: true);
    }
}
