<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title'=>'string|required',
            'topic'=>'string|required',
            'description'=>'string|required',
            'author'=>'string|required',
        ];
    }
    public function messages()
    {
        return[
            'title.string'=>"Please enter a string value for title",
            'author.required'=>"Enter your name",

        ];
    }
}
