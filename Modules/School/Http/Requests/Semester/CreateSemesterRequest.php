<?php

namespace Modules\School\Http\Requests\Semester;

use Illuminate\Foundation\Http\FormRequest;

class CreateSemesterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules() {
        return [
            'semester.semester_name' => ['required'],
            'semester.start_date'    => ['required'],
            'semester.end_date'      => ['required'],
            'semester.session_id'    => ['required', 'integer', 'gt:0'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize() {
        return auth()->user()->can('create semesters');
    }
}
