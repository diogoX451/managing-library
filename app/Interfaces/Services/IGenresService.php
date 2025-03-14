<?php

namespace App\Interfaces\Services;

interface IGenresService
{
    public function getGenres(): array;
    public function getGenre(int $id): array;
    public function createGenre(array $data): array;
    public function updateGenre(int $id, array $data): array;
    public function deleteGenre(int $id): bool;
}
