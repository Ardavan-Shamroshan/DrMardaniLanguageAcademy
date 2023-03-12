<?php

namespace Modules\School\Http\Requests\SchoolClass;

use Illuminate\Foundation\Http\FormRequest;

class CreateClassRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules() {
        return [
            'class.class_name' => ['required'],
            'class.session_id' => ['required', 'integer', 'gt:0'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize() {
        return auth()->user()->can('create classes');
    }
}
