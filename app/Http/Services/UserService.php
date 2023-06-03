<?php

namespace App\Http\Services;
use App\Models\User as Model;
use Illuminate\Support\Facades\Hash;

class UserService {

    public function __construct(protected Model $model) {}

    public function store(array $request) {
        $request['password'] = Hash::make($request['password']);

        return $this->model->create($request);
    }
}