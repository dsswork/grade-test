<?php

namespace App\Data;

class PublisherData
{
    public function __construct(
        readonly public null|int $id,
        readonly public string $name,
    )
    {
    }

    public static function make(string $name): self
    {
        return new self(null, $name);
    }
}
