<?php

namespace Chimbarongo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nombre'          => 'required',
            'slug'          => 'required|unique:posts,slug',
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'titulo'          => 'required',
            'subtitulo'          => 'required',
            'introduccion'          => 'required',
            'resumen'          => 'required',
            'abstracto'          => 'required',
            'conclusion'          => 'required',
            'referencias'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED',            
        ];

        if($this->get('imagen'))        
            $rules = array_merge($rules, ['imagen'
             => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
