<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
{
    //  Determine if the user is authorized to make this request.
    public function authorize()
    {
        return true;
    }

    //  Get the validation rules that apply to the request.
    public function rules()
    {
        return [
            'name' => ['required','string','max:50'],
            'descriptions' => ['string','nullable'],
            'parent_id' => ['integer','nullable'],
        ];
    }
}
