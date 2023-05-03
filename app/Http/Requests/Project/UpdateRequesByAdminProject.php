<?php

namespace App\Http\Requests\Project;

use App\Http\Requests\BaseRequest;

class UpdateRequestByAdminProject extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string',
            'places' => 'integer',
            'goal' => 'string',
            'description' => 'string',
            'difficulty' => 'integer',
            'date_start' => 'string',
            'date_end' => 'string',
            'requirements' => 'string',
            'customer' => 'string|nullable',
            'product_result' => 'string',
            'study_result' => 'string',
            'additional_inf' => 'string|nullable',

            'state_id' => 'integer',
            'type_id' => 'integer|exists:types,id',
            'department_id' => 'required|integer|exists:departments,id',

            'supervisor_ids' => 'nullable|array',
            'supervisor_ids.*' => 'nullable|integer|exists:supervisor,id',

            'skill_ids' => 'nullable|array',
            'skill_ids.*' => 'nullable|integer|exists:skills,id',

            'speciality_ids' => 'nullable|array',
            'speciality_ids.*' => 'nullable|integer|exists:specialities,id',
        ];
    }
}
