<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PageFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            
            'name' => [
                'required'
            ],

           'description' => [
               'required'
           ],

           'slug' => [
            'required'
           ],

           'status' =>[
            'nullable'
           ],

            'archive'=>[
                'required'
            ],

            'sort' =>[
               'required'
            ],

           
        ];

        return $rules;
        
    }
}
