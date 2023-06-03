<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClientSettingsRequest;
use App\Http\Services\UserService;
use App\Http\Services\ClientSettingService;


class ClientSettingController extends Controller
{
    public function __construct(
        protected UserService $userService, 
        protected ClientSettingService $clientSettingService
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientSettingsRequest $request)
    {
        $createdClient = $this->userService->store($request->only(['name', 'email', 'password']));        

        $settingsRequest = [
            'user_id' => $createdClient->id,
            'data' => json_encode($request->except(['firstname', 'lastname', 'email', 'password']))
        ];

        return $this->clientSettingService->store($settingsRequest);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
