<?php

namespace App\Http\Requests\Project;

use App\Http\Requests\BaseRequest;

class StoreRequestBySupervisorProject extends BaseRequest
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
            'date_start' => 'date',
            'date_end' => 'date',
            'requirements' => 'string',
            'customer' => 'string|nullable',
            'product_result' => 'string',
            'study_result' => 'string',
            'additional_inf' => 'string|nullable',

            'type_id' => 'required|integer|exists:types,id',
            'theme_source_id' => 'nullable|integer|exists:theme_sources,id',
            'department_id' => 'nullable|integer|exists:departments,id',
            'state_id' => 'numeric|min:6|max:7',
            'prev_project_id' => 'nullable|integer|exists:projects,id',

            'supervisors' => 'required|array',
            'supervisors.*.supervisor_id' => 'required|integer|exists:supervisors,id',
            'supervisors.*.role_ids' => 'required|array',
            'supervisors.*.role_ids.*' => 'required|integer|min:2|max:3|exists:project_supervisor_roles,id',

            'skill_ids' => 'nullable|array',
            'skill_ids.*' => 'nullable|integer|exists:skills,id',

            'new_skills' => 'nullable|array',
            'new_skills.*' => 'nullable|string',

            'specialities' => 'required|array',
            'specialities.*.specialitiy_id' => 'nullable|integer|exists:specialities,id',
            'specialities.*.course' => 'nullable|integer',
            'specialities.*.priority' => 'nullable|integer',
        ];
    }
}
