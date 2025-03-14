<?php

namespace App\Interfaces\Services;

interface IUsersService
{
    public function getUser(int $registrationNumber): array;
    public function createUser(array $data): array;
    public function updateUser(int $id, array $data): array;
    public function deleteUser(int $id): bool;
}
