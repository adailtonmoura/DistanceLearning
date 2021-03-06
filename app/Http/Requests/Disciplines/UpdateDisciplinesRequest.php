<?php

namespace App\Http\Requests\Disciplines;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDisciplinesRequest extends FormRequest
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
            'name' => 'nullable',
            'openinghours' => 'nullable',
            'teacher' => 'nullable',
        ];
    }
    /**
     * Message apply to the request rules.
     *
     * @return array
     */
    public function message()
    {
        return [
            'name.required' => 'You must specify an :atribute',
            'teacher.required' => 'You must specify an :atribute',
            'openinghours.required' => 'You must specify an :atribute',
        ];
    }
}
