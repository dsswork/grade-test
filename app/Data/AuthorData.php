<?php

namespace App\Data;

class AuthorData
{
    public function __construct(
        readonly public null|int $id,
        readonly public string $firstName,
        readonly public string $lastName,
    )
    {
    }

    public static function make($firstName, $lastName): self
    {
        return new self(null, $firstName, $lastName);
    }
}
