<?php

namespace App\Livewire\Forms;

use App\Models\Appointment;
use Livewire\Form;

class AppointmentForm extends Form
{
    public ?Appointment $appointmentModel;
    
    public $title = '';
    public $description = '';
    public $date = '';
    public $time = '';
    public $time_start = '';
    public $time_end = '';
    public $status = '';
    public $category = '';
    public $frequency = '';
    public $id_user = '';
    public $name_user = '';

    public function rules(): array
    {
        return [
			'title' => 'required|string',
			'description' => 'nullable|string',
			'date' => 'required',
			'time' => 'required',
			/* 'time_start' => 'nullable',
			'time_end' => 'nullable',
			'status' => 'required',
			'category' => 'required',
			'frequency' => 'nullable',
			'id_user' => 'required',
			'name_user' => 'required', */
        ];
    }
    public function setAppointmentModel(Appointment $appointmentModel): void
    {
        $this->appointmentModel = $appointmentModel;
        
        $this->title = $this->appointmentModel->title;
        $this->description = $this->appointmentModel->description;
        $this->date = $this->appointmentModel->date;
        $this->time = $this->appointmentModel->time;
    }

    public function store(): void
    {
        $this->appointmentModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->appointmentModel->update($this->validate());

        $this->reset();
    }
}
