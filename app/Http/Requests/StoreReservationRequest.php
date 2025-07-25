<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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

            'name'   => 'required|string|max:255',
            'phone'  => 'required|string|max:20',
            'tables' => 'required|integer|min:1',
            'people' => 'required|integer|min:1',
            'date'   => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:h:i a',
        ];
        //

    }
}
