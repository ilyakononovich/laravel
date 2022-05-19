<?php

namespace App\Http\Requests\Poi;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePoiRequest extends FormRequest
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
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'liked' => 'required|numeric',
            'viewed' => 'required|numeric',
            'priority' => 'max:255',
            'description' => 'required',
            'city_id' => 'numeric',
            'detail' => 'required',
            'detail_info_copyright' => 'max:255',
            'address' => 'max:255',
            'website' => 'max:255',
            'working_hours' => 'max:255',
            'zoom' => 'numeric',
            'radius' => 'numeric'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'message' => $validator->messages()->first()]));
    }
}
