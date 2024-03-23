<?php

namespace App\Http\Requests\Auth;

use App\Traits\ApiResponseTrait;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;


class YouthCreateRequest extends FormRequest
{
    use ApiResponseTrait;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:mentors',
            'password' => 'required|confirmed|min:8',
            'education_level' => ['required',Rule::in(['تعليم ابتدائي','تعليم اعدادي','تعليم ثانوي','تعليم جامعي'])],
            'location' =>['required','string'],
            'categories' =>['required','array','max:5'],
            'levels' =>['required','array','max:5'],
            'phone_number' => ['required', 'numeric', 'min:10']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            throw new HttpResponseException(
                $this->validationError('validation errors', $validator->errors())
            );
        }
    }
}
