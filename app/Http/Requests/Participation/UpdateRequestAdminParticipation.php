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
            'state_id' => 'integer|min:1|max:4',
            'candidate_id' => 'integer|exists:candidates,id',
            'project_id' => 'integer|exists:projects,id',
        ];
    }
}
