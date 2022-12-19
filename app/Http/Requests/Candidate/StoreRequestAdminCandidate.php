<?php

namespace App\Http\Requests\Candidate;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestAdminCandidate extends FormRequest
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
            'fio' => 'string',
            'about' => 'string',
            'email' => 'string',
            'numz' => 'integer',
            'phone' => 'string',
            'course' => 'integer',
            'training_group' => 'string',
            'canSendParticipations' => 'boolean',

            'skill_ids' => 'nullable|array',
            'skill_ids.*' => 'nullable|integer|exists:skills,id',
        ];
    }
}
