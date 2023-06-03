<?php

namespace App\Http\Services;
use App\Models\User as Model;
use Illuminate\Support\Facades\Hash;

class UserService {

    public function __construct(protected Model $model) {}

    public function store(array $request) {
        $request['name'] = $request['firstname']." ".$request['lastname'];
        $request['password'] = Hash::make($request['password']);

        return $this->model->create($request);
    }
}