<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Repositories\RecordsRepository;

class BlogController extends Controller
{
    const RECORDS_AT_PAGE = 5;

    protected $repository;

    public function __construct(RecordsRepository $recordsRepository)
    {
        $this->repository = $recordsRepository;
    }

    public function list()
    {
        $result = $this->repository->paginate(self::RECORDS_AT_PAGE);

        return $this->returnResponse([
            'result' => $result
        ]);
    }

    public function inner(int $id)
    {
        $result = $this->repository->get($id);

        return $this->returnResponse([
            'result' => $result
        ]);
    }

    public function update(UpdateBlogRequest $updateBlogRequest)
    {
        $this->repository->update($updateBlogRequest->all());

        return $this->returnResponse([
            'update' => true
        ]);
    }
}
