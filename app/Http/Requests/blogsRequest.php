<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogsRequest extends FormRequest
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
        return [
            'name_ar'=> 'required',
            'name_en' => 'required',
            'image' => 'required',
            'short_desc_ar' => 'required',
            'short_desc_en' => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'main_department_id' => 'required',
        ];
    }
}
