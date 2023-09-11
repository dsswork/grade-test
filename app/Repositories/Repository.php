<?php

namespace App\Repositories;

use Doctrine\Persistence\ObjectRepository;

class Repository
{
    public function __construct(
        protected ObjectRepository $repository
    )
    {
    }
}
