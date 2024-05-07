<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'event_time' => 'required|date',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|decimal',
            'attachment' => 'nullable|mimes:png,jpeg,jpg,pdf|max:2048'
        ];
    }
}
