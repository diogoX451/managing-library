<?php

namespace App\Services\Users;

use App\Interfaces\Services\IUsersService;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UsersService implements IUsersService
{
    protected $validations = [
        "email" => "required|email",
        "name" => "required",
        "registration_number" => "required|unique:users",
    ];



    public function getUser(int $registrationNumber): array
    {
        return User::where("registration_number", $registrationNumber)->first()->toArray();
    }
    public function createUser(array $data): array
    {
        $validate = Validator::make($data, $this->validations);
        if ($validate->fails()) {
            new \Exception($validate->errors()->first());
        }

        return User::create($data);
    }
    public function updateUser(int $registration_number, array $data): array
    {
        $validate = Validator::make($data, $this->validations);
        if ($validate->fails()) {
            new \Exception($validate->errors()->first());
        }

        return User::where(
            "registration_number",
            $registration_number
        )
            ->update($data);
    }
    public function deleteUser(int $registrationNumber): bool
    {
        $user = User::where("registration_number", $registrationNumber)->first();
        if (! $user) {
            return false;
        }

        $user->delete();

        return true;
    }
}
