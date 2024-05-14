<?php

namespace App\Livewire\Appointments;
use App\Models\Appointment;
use Livewire\Component;

class Appointment extends Component
{
    public function render()
    {
        return view('livewire.appointments.appointment');
    }
}
