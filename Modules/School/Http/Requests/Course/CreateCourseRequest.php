<?php

namespace Modules\School\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'course.course_name'  => ['required'],
            'course.class_id'     => ['required','integer','gt:0'],
            'course.semester_id'  => ['required','integer','gt:0'],
            'course.session_id'   => ['required','integer','gt:0'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize()
    {
        return auth()->user()->can('create courses');
    }
}
