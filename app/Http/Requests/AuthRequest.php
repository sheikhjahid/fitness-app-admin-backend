<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
        $pathname = request()->route()->uri();
        if ($pathname === 'api/register') {
            return [
                "name" => "required",
                "email" => "required|email|unique:users",
                "password" => "required|min:6"
            ];
        } else {
            return [
                "email" => "required|email|exists:users",
                "password" => "required"
            ];
        }
    }
}
