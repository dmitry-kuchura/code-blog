<?php

namespace App\Repositories;

use App\Models\Enum\RecordStatus;
use App\Models\Records;

class RecordsRepository implements Repository
{
    /** @var $model Records */
    private $model = Records::class;

    public function paginate(int $offset)
    {
        return $this->model::with(['translations' => function ($query) {
            $query->where('language', 'ru');
        }])->where('status', RecordStatus::ACTIVE)
            ->orderBy('id', 'desc')
            ->paginate($offset);
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
        return $this->model::where('id', $id)->first();
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
