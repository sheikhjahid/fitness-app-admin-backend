<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientSettingRequest extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'domain' => 'required',
            'crm_type' => '',
            'crm_api' => '',
            'crm_username' => '',
            'crm_password' => '',
            'smtp_from_email' => '',
            'smtp_from_name' => '',
            'smtp_host' => '',
            'smtp_port' => '',
            'smtp_username' => '',
            'smtp_password' => '',
            'smtp_encryption' => '',
            'smtp_token' => ''
        ];
    }
}
