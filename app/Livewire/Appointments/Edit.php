<?php

namespace App\Livewire\Appointments;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public AppointmentForm $form;

    public function mount(Appointment $appointment)
    {
        $this->form->setAppointmentModel($appointment);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('appointments.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.appointment.edit');
    }
}
