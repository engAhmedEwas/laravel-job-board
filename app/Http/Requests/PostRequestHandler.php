<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestHandler extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> "bail|required|unique:post,title,{$this->input('id')}",
            'author'=> 'required',
            'body'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Field Is Required',
            'author.required'=> 'Field Is Required',
            'body.required'=> 'Field Is Required',
        ];
    }
}
