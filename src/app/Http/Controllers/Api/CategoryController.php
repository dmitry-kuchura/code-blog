<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CategoriesRepository;

class CategoryController extends Controller
{
    const RECORDS_AT_PAGE = 5;

    protected $repository;

    public function __construct(CategoriesRepository $categoriesRepository)
    {
        $this->repository = $categoriesRepository;
    }

    public function short()
    {
        $result = $this->repository->all();

        return $this->returnResponse([
            'result' => $result
        ]);
    }
}
