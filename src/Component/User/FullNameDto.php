<?php

declare(strict_types=1);

namespace App\Component\User;

class FullNameDto
{
    public function __construct(
        private string $givenName,
        private string $familyName,
        private int $age
    ){
    }

    /**
     * @return string
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }

    /**
     * @return string
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}