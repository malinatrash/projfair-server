<?php

namespace App\Http\Requests\Type;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'string',
            'places' => '',
            'goal' => 'string',
            'idea' => 'string',
            'difficulty' => '',
            'date_start' => 'string',
            'date_end' => 'string',
            'requirements' => 'string',
            'customer' => 'string',
            'expected_result' => 'string',
            'additional_inf' => 'string',
            'result' => 'string',

            'state_id' => 'required|integer|exists:states,id',
            'supervisor_id' => 'required|integer|exists:supervisors,id',
            'type_id' => 'required|integer|exists:types,id',

            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
}
