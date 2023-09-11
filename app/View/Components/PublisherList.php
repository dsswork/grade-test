<?php

namespace App\View\Components;

use App\Repositories\PublisherRepository;
use Illuminate\View\Component;

class PublisherList extends Component
{
    public array $publishers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PublisherRepository $repository)
    {
        $this->publishers = $repository->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.publisher-list');
    }
}
