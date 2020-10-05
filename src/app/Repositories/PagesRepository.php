<?php

namespace App\Repositories;

use App\Models\Enum\RecordStatus;
use App\Models\Pages;

class PagesRepository implements Repository
{
    /** @var $model Pages */
    private $model = Pages::class;

    public function find(string $alias)
    {
        return $this->model::with(['translations' => function ($query) {
            $query->where('language', 'ru');
        }])->where('status', RecordStatus::ACTIVE)
            ->where('alias', $alias)
            ->first();
    }

    public function paginate(int $offset)
    {
        // TODO: Implement paginate() method.
    }

    public function all()
    {
        return $this->model::with(['translations' => function ($query) {
            $query->where('language', 'ru');
        }])->where('status', RecordStatus::ACTIVE)->get();
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
        // TODO: Implement get() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
