<?php

namespace App\Actions;

use App\Repositories\PagesRepository;

class PagesAction
{
    private $repository;

    public function __construct(PagesRepository $pagesRepository)
    {
        $this->repository = $pagesRepository;
    }

    public function getPage($alias)
    {
        return $this->repository->find($alias);
    }
}
