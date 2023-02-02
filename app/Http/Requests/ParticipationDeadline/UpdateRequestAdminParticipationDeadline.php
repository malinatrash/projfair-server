<?php

namespace App\Http\Requests\ParticipationDeadline;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Обновление дедлайна подачи заявок
 */
class UpdateRequestAdminParticipationDeadline extends FormRequest
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
            'deadline' => 'date',
        ];
    }
}
