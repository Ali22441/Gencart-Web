<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            //
            "name"  => "required|min:3",
            "image" =>  "nullable|image|mimes:jpeg,png,jpg,svg|max:1024",
            "quantity"   => "required|integer",
            "price"   => "required|number",
            "promo_price"   => "nullable",
            "description"   => "nullable|text",
            "total_sale"   => "required|int",
            "store_id"   => "required|exists:stores,id",
            "department_id"   => "required|exists:departments,id",
            "brand_id"   => "nullable|exists:brands,id",
            "shelf_id"   => "nullable|exists:shelves,id",
        ];
    }
}
