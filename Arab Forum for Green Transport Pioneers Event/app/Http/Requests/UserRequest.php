<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|string',
            "email" => "required|email|unique:users,email",
            "phone" => "required|max:20",
            // "national_id" => "required|string|digits:14",
        ];
    }

    public function messages()
    {
        // You can use any custom messages here
        return [
            'name.required' => 'من فضلك قم بادخال الاسم',
            'name.string' => 'من فضلك قم بادخال الاسم بشكل صحيح',
            'email.required' => 'من فضلك قم بادخال الايميل',
            'email.email' => 'من فضلك قم بادخال الايميل بشكل صحيح',
            'email.unique' => 'هذا الايميل تم التسجيل به من قبل',
            'phone.required' =>'من فضلك قم بادخال رقم التلفون',
            'phone.phone' =>'الرقم الذى قمت بادخاله غير صحيح'
        ];
    }
}
