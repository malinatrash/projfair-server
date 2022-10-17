<?php // TODO Ало дети донбасса сделайте тут описание полей(уточнить какие поля есть в институтах)

namespace App\Http\Requests\Institute;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            // 'state_id' => 'required|integer|exists:state_participations,id', 
        ];
    }
}
