<?php

namespace App\Http\Requests\State;

use App\Http\Requests\BaseRequest;

class UpdateRequestAdminState extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'state' => 'string',
        ];
    }
}
