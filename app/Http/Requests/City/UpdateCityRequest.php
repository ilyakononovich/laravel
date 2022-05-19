<?php

namespace App\Http\Requests\City;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateCityRequest extends FormRequest
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
            'name' => 'max:255',
            'country_id' => 'numeric',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
            'ne_latitude' => 'numeric',
            'ne_longitude' => 'numeric',
            'sw_latitude' => 'numeric',
            'sw_longitude' => 'numeric',
            'zoom' => 'numeric',
            'radius' => 'numeric',
            'is_published' => 'numeric',
            'price' => 'numeric'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'message' => $validator->messages()->first()]));
    }
}
