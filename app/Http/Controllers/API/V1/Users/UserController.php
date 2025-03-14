<?php

namespace App\Http\Controllers\API\V1\Users;


use App\Http\Controllers\Controller;
use App\Interfaces\Services\IUsersService;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    protected IUsersService $usersService;
    public function __construct(IUsersService $usersService)
    {
        $this->usersService = $usersService;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $user = $this->usersService->createUser($data);
        return response()->json($user);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = $this->usersService->updateUser($data["registration_number"], $data);
        return response()->json($user);
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        $user = $this->usersService->deleteUser($data["registration_number"]);
        if (!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        return response()->json(["message" => "User deleted"], 200);
    }

    public function getUser(Request $request)
    {
        $registrationNumber = $request->get("registration_number");
        $user = $this->usersService->getUser($registrationNumber);
        if (!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        return response()->json($user);
    }
}
