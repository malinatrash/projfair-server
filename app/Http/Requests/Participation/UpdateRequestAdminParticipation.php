<?php

namespace App\Http\Requests\Participation;

use App\Http\Requests\BaseRequest;


/**
 * Обновление приоритета заявки авторизованного пользователя
 */
class UpdateRequestAdminParticipation extends BaseRequest
{

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
            'state_id' => 'integer',
            'candidate_id' => 'integer|exists:candidates,id',
            'project_id' => 'integer|exists:projects,id',
        ];
    }
}
