<?php

namespace Modules\School\Http\Requests\Section;

use Illuminate\Foundation\Http\FormRequest;

class CreateSectionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'section.section_name'  => ['required'],
            'section.room_no'       => ['required'],
            'section.class_id'      => ['required','integer','gt:0'],
            'section.session_id'    => ['required','integer','gt:0'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize()
    {
        return auth()->user()->can('create sections');
    }
}
