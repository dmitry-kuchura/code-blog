<?php

namespace App\Actions;

use App\Repositories\RecordsRepository;

class RecordsAction
{
    private $repository;

    public function __construct(RecordsRepository $recordsRepository)
    {
        $this->repository = $recordsRepository;
    }

    public function getRecords()
    {
        return $this->repository->all();
    }
}
