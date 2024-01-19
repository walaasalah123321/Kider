<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            "name"=>"required",
            "position"=>"required",
            "facebook"=>"sometimes",
            "twitter"=>"sometimes",
            "instagram"=>"sometimes",
            "image"=>"required|mimes:png,jpg,jpeg|max:2048"

        ];

    }
    public function messages()
    {
        
        return [

            "name"=>"please enter your name",
            
        ];
    }
}
