<?php

namespace App\Http\Requests;

use App\Http\Controllers\Auth\PagesController;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StorePages extends FormRequest
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
            'name' => 'required',
            'uri' => 'required',
            'orderPage' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'A title is required',
            'uri'  => 'A message is required',
            'orderPage'  => 'A message is required',
        ];
    }
}
