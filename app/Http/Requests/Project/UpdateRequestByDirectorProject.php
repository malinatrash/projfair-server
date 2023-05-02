<?php

namespace App\Http\Requests\Project;

use App\Http\Requests\BaseRequest;


class UpdateRequestByDirectorProject extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rejection_reason' => 'nullable|string',
            'rejection_date' => 'nullable|date',
            'state_id' => 'numeric|min:8|max:9',
        ];
    }
}
