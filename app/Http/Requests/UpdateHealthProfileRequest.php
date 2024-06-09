<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHealthProfileRequest extends FormRequest
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
            'date_of_birth' => 'nullable|date',
            'height' => 'nullable|integer|min:0|max:300',
            'weight' => 'nullable|decimal:0,3|min:0|max:635',
            'blood_group' => 'nullable|string|min:1|max:50',
            'pulse' => 'nullable|integer|min:0|max:600',
            'blood_pressure_systolic' => 'nullable|integer|min:0|max:400',
            'blood_pressure_diastolic' => 'nullable|integer|min:0|max:400',
            'allergies' => 'nullable|string',
            'chronic_diseases' => 'nullable|string',
            'surgical_interventions' => 'nullable|string',
            'cigarettes_per_day' => 'nullable|integer|min:0',
            'alcohol_beer_per_week' => 'nullable|integer|min:0',
            'alcohol_wine_per_week' => 'nullable|integer|min:0',
            'alcohol_spirits_per_week' => 'nullable|integer|min:0',
        ];
    }
}
