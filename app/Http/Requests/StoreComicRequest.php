<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            "title"=>"required|min:5",
            "description"=>"required|min:20",
            "thumb"=>"url|nullable",
            "price"=>"required|numeric",
            "series"=>"required|min:5",
            "sale_date"=>"required|date",
            "type"=>"required|min:5",
        ];
    }
}
