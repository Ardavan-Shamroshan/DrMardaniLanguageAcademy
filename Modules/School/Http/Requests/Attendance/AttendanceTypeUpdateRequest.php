<?php

namespace Modules\School\Http\Requests\Attendance;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceTypeUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules() {
        return [
            'setting.attendance_type' => ['required']
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize() {
        return auth()->user()->can('update attendances type');
    }
}
