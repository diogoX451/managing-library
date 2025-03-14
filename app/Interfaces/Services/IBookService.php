<?php

namespace App\Interfaces\Services;

interface IBooksService
{
    public function getBooks(): array;
    public function getBook(int $id): array;
    public function createBook(array $data): array;
    public function updateBook(int $id, array $data): array;
    public function deleteBook(int $id): bool;
}
