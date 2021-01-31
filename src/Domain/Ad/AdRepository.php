<?php
declare(strict_types=1);

namespace App\Domain\Ad;

interface AdRepository{

    public function findAll(): array;

    public function findAdOfMake($makeName, $price): array;

    public function findAdOfModel($modelName, $price): array;

}