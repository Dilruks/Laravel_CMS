<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        $rules =[
            'name'=>[
               'required'
              
            ],

            'body'=>[
                'required'
                
             ],

             'slug'=>[
                'required'
               
             ],

             'parent'=>[
                'required'
             ],

             'image_id'=>[
                'required'
                
             ],

             'url'=>[
                'required'
                
             ],

             'status'=>[
                'nullable'
                
             ],

             'archive'=>[
                'required'
               
             ],

             'sort'=>[
                'required'
                
             ],

        ];

        return $rules;
    }
}
       
