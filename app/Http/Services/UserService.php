<?php

namespace App\Http\Services;

use App\Models\User as Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(protected Model $model)
    {
    }

  

    public function login($request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']]) === false) {
            return response()->json([
                'message' => 'Invalid credentials. Try again.'
            ]);
        }

        $user = $this->model->whereEmail($request['email'])->first();
        $token = $user->createToken(Carbon::now())->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

   

  

   

   

 

   
}
