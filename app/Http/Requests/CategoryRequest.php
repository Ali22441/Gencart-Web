<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         switch($this->method())
        {

            case 'POST':
            {
                return [
                    "name" => "required|min:3",
                    "address" => "required|min:10",
                    "phone" => "required|min:7",
                    "zipcode" => "required|min:5",
                    "place_id" => "required",
                    "logo" => "nullable",
                    "banner" => "nullable"
                ];
            }
            case 'PUT':
            {
                  return [
                    "name" => "required|min:3",
                    "address" => "required|min:10",
                    "phone" => "required|min:7",
                    "zipcode" => "required|min:5",
                    "place_id" => "required",
                    "logo" => "nullable",
                    "banner" => "nullable"
                ];
            }
            default:break;
            
        }   

    }
}
