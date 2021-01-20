<?php

namespace App\Actions;

use App\Repositories\RecordsRepository;

class RecordsAction
{
    private $repository;

    const AT_PAGE = 3;

    public function __construct(RecordsRepository $recordsRepository)
    {
        $this->repository = $recordsRepository;
    }

    public function getRecords()
    {
        return $this->repository->paginate(self::AT_PAGE);
    }

    public function getRecord(string $alias)
    {
        return $this->repository->findByAlias($alias);
    }

    public function viewRecord(int $id): void
    {
        $this->repository->view($id);
    }
}
