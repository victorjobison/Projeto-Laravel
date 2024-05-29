<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
}
