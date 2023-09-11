<?php

namespace App\Repositories;

use App\Data\PublisherData;
use App\Entities\Publisher;
use LaravelDoctrine\ORM\Facades\EntityManager;

class PublisherRepository extends Repository
{
    public function all(): array
    {
        return $this->repository->findAll();
    }

    public function create(PublisherData $publisherData): Publisher
    {
        $publisher = new Publisher($publisherData->name);
        EntityManager::persist($publisher);
        EntityManager::flush();
        return $publisher;
    }
}
