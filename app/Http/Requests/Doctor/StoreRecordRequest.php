<?php

namespace App\Http\Requests\Doctor;

//use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRecordRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
//            'mother_id' => 'required'|,
            'bloodPressure' =>'required|integer',
            'weight' => 'required|Decimal',

            'babySize' => 'required|string',
            'sugarRate' => 'required|integer',
            'medication' => 'required|string',
//            'confirmation'=>'required|boolean'
        ];
    }
}
