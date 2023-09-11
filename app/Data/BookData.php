<?php

namespace App\Data;

class BookData
{
    public function __construct(
        readonly public null|int $id,
        readonly public string   $title,
        readonly public float      $price,
        readonly public int      $publishYear,
        readonly public int      $publisherId
    )
    {
    }

    public static function make($title, $price, $publishYear, $publisherId): self
    {
        return new self(null, $title, $price, $publishYear, $publisherId);
    }
}
