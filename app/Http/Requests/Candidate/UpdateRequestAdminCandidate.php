<?php

namespace App\Http\Requests\Candidate;

use App\Http\Requests\BaseRequest;

class UpdateRequestAdminCandidate extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fio' => 'string',
            'about' => 'string',
            'email' => 'string',
            'numz' => 'integer',
            'phone' => 'string',
            'course' => 'integer',
            'training_group' => 'string',
            'can_send_participations' => 'boolean',

            'skill_ids' => 'nullable|array',
            'skill_ids.*' => 'nullable|integer|exists:skills,id',
        ];
    }
}
