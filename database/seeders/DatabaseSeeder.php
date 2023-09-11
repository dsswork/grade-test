<?php

namespace Database\Seeders;

use App\Data\AuthorData;
use App\Data\PublisherData;
use App\Repositories\AuthorRepository;
use App\Repositories\PublisherRepository;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(
        PublisherRepository $publisherRepository,
        AuthorRepository $authorRepository
    )
    {
        $authorRepository->create(AuthorData::make('Taras', 'Shevchenko'));
        $authorRepository->create(AuthorData::make('Oles', 'Gonchar'));
        $authorRepository->create(AuthorData::make('Ostap', 'Vishnia'));
        $authorRepository->create(AuthorData::make('Oleg', 'Vinnik'));

        $publisherRepository->create(PublisherData::make('Eksmo'));
        $publisherRepository->create(PublisherData::make( 'Kyiv Book'));
        $publisherRepository->create(PublisherData::make( 'Lviv Book'));
    }
}
