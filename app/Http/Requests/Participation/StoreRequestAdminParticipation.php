<?php

namespace App\Http\Requests\Participation;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestAdminParticipation extends FormRequest
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
            'priority' => 'integer',

            // 'review' => 'string',
            'state_id' => 'required|integer|exists:state_participations,id',
            'candidate_id' => 'required|integer|exists:candidates,id',
            'project_id' => 'required|integer|exists:projects,id',
        ];
    }
}
