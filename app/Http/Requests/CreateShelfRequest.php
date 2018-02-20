<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateShelfRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'name' => "required|min:3|unique:shelves,name,NULL,id,store_id," . $request->store_id . ",department_id," . $request->department_id,
            'description' => "nullable|min:10",
            'store_id' => "required|exists:stores,id",
            'department_id' => "required|exists:departments,id"
        ];
    }
}
