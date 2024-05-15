<?php

namespace App\Livewire\Appointments;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public AppointmentForm $form;

    public function mount(Appointment $appointment)
    {
        $this->form->setAppointmentModel($appointment);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.appointment.show', ['appointment' => $this->form->appointmentModel]);
    }
}
