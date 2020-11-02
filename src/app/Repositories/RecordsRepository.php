<?php

namespace App\Repositories;

use App\Models\Enum\Status;
use App\Models\Records;

class RecordsRepository implements Repository
{
    /** @var $model Records */
    private $model = Records::class;

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

    public function findByAlias(string $alias)
    {
        return $this->model::where('alias', $alias)->first();
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
