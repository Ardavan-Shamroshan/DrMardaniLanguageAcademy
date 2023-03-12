<?php

namespace Modules\School\Http\Requests\SchoolSession;

use Illuminate\Foundation\Http\FormRequest;

class CreateSessionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules() {
        return [
            'session.session_name' => ['required'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public static function authorize() {
        return auth()->user()->can('create school sessions');
    }


    public function attributes() {
        return [
            'session.session_name' => 'Session Name',
        ];
    }
}
