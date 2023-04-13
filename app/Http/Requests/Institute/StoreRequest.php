<?php // TODO Ало дети донбасса сделайте тут описание полей(уточнить какие поля есть в институтах)

namespace App\Http\Requests\Institute;

use App\Http\Requests\BaseRequest;


class StoreRequest extends BaseRequest
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
            // 'state_id' => 'required|integer|exists:state_participations,id', 
        ];
    }
}
