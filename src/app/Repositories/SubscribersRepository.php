<?php

namespace App\Repositories;

use App\Models\Enum\Status;
use App\Models\Subscribers;

class SubscribersRepository implements Repository
{
    /** @var $model Subscribers */
    private $model = Subscribers::class;

    public function paginate(int $offset)
    {
        // TODO: Implement paginate() method.
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

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}
