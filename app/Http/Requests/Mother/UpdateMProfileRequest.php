<?php

namespace App\Http\Requests\Mother;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMProfileRequest extends FormRequest
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
            'name' =>[ 'required,string max:255'],
            'age' => [ 'required,string max:255'],
            'address' =>[ 'required,string max:255'],
            'email' => [ 'required,string max:255'],
            'phone' => [ 'required,string max:255'],
            'image' => 'image|mimes:jpeg,pang,jpg,gif,svg|max:2048',
        ];
    }
}
