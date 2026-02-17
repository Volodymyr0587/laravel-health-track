<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTreatmentRequest extends FormRequest
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
            'disease_id' => 'required|exists:diseases,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'started_at' => 'nullable|date|before_or_equal:today',
            'ended_at' => 'nullable|date|after_or_equal:started_at|before_or_equal:today',
            'price' => 'nullable|numeric|min:0',
        ];
    }
}
