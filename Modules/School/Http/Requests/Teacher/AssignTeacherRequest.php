<?php

namespace Modules\School\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class AssignTeacherRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'assign_teacher.course_id'             => ['required','integer'],
            'assign_teacher.semester_id'           => ['required','integer'],
            'assign_teacher.class_id'              => ['required','integer'],
            'assign_teacher.section_id'            => ['required','integer'],
            'assign_teacher.teacher_id'            => ['required','integer'],
            'assign_teacher.session_id'            => ['required','integer'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize()
    {
        return auth()->user()->can('assign teachers');
    }
}
