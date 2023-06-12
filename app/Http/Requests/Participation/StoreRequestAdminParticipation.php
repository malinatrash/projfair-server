<?php

namespace App\Http\Requests\Participation;

use App\Http\Requests\BaseRequest;

class StoreRequestAdminParticipation extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'state_id' => 'integer|required|min:1|max:4',
            'priority' => 'integer|required',
            'project_id' => 'integer|exists:projects,id',
            'candidate_id' => 'integer|exists:candidates,id',
        ];
    }
}
