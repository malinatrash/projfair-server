<?php

namespace App\Http\Requests\Participation;

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
            'motivation' => 'string',

            'project_id' => 'required|integer|projects:projects,id',
            'candidate_id' => 'required|integer|exists:candidates,id',
            'state_id' => 'required|integer|exists:state_participations,id',
        ];
    }
}
