<?php

namespace App\View\Components;

use App\Entities\Author;
use App\Repositories\AuthorRepository;
use Illuminate\View\Component;
use LaravelDoctrine\ORM\Facades\EntityManager;

class AuthorList extends Component
{
    public $authors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(AuthorRepository $repository)
    {
        $this->authors = $repository->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.author-list');
    }
}
