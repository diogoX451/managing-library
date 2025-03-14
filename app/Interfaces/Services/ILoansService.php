<?php

namespace App\Interfaces\Services;

interface ILoansService
{
    public function getLoans(): array;
    public function getLoan(int $id): array;
    public function createLoan(array $data): array;
    public function updateLoan(int $id, array $data): array;
    public function deleteLoan(int $id): bool;
}
