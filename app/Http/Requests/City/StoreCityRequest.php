<?php

namespace App\Http\Requests\City;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreCityRequest extends FormRequest
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
            'name' => 'required|max:255',
            'country_id' => 'required|numeric',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'ne_latitude' => 'required|numeric',
            'ne_longitude' => 'required|numeric',
            'sw_latitude' => 'required|numeric',
            'sw_longitude' => 'required|numeric',
            'purchase_id' => 'required',
            'zoom' => 'required|numeric',
            'radius' => 'numeric',
            'is_published' => 'numeric',
            'price' => 'required|numeric'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'message' => $validator->messages()->first()]));
    }
}
