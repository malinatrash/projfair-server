<?php

namespace App\Http\Requests\Participation;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Обновление приоритета заявки авторизованного пользователя
 */
class UpdateRequestAdminParticipation extends FormRequest
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
            'state_id' => 'integer|exists:state_participations,id',
            'candidate_id' => 'integer|exists:candidates,id',
            'project_id' => 'integer|exists:projects,id',
        ];
    }
}
