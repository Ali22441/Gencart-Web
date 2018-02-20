<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CreateDepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // $store = Comment::find($this->route('store'));

        // return $store && $this->user()->can('create', $department);
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

            'name' => "required|min:3|unique:departments,name,NULL,id,store_id," . $request->store_id,
            'description' => "nullable|min:10",
            'store_id' => "required|exists:stores,id",
            'image' =>  "nullable"
        ];
    }
}
