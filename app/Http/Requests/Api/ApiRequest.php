<?php

namespace App\Http\Requests\Api;

use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiRequest extends FormRequest
{
   protected function failedValidation(Validator $validator)
   {
     throw new HttpResponseException(
        response()->json($validator->errors()->getMessages(), 400)
    );
   }
}
