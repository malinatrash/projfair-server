<?php

namespace App\Http\Requests\Supervisor;

use App\Http\Requests\BaseRequest;

class UpdateRequestAdminSupervisor extends BaseRequest
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
            'email' => 'string',
            'about' => 'string',
            'position' => 'string',
            'department_id' => 'required|integer|exists:departments,id',

        ];
    }
}
