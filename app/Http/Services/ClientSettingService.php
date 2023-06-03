<?php

namespace App\Http\Services;

use App\Models\ClientSettings as Model;


class ClientSettingsService {

    public function __construct(protected Model $model) {}

    public function store(array $request) {
        return $this->model->create($request);
    }
}