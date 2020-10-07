<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Models\Enum\Status;

class CategoriesRepository implements Repository
{
    /** @var $model Categories */
    private $model = Categories::class;

    public function paginate(int $offset)
    {
        return $this->model::orderBy('id', 'desc')->paginate($offset);
    }

    public function all()
    {
        return $this->model::where('status', Status::ACTIVE)->get();
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function get($id)
    {
        return $this->model::where('id', $id)->first();
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
