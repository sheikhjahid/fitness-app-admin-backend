<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends BaseController
{
    //

    public function __construct(protected UserService $service)
    {
         parent::__construct();
    }

    public function login(AuthRequest $request)
    {
        $response = $this->service->login($request->validated());

        return $this->sendResponse('Admin logged-in successfully', $response);
    }
}
