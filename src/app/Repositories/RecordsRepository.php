<?php

namespace App\Repositories;

use App\Models\Records;

class RecordsRepository implements Repository
{
    /** @var $model Records */
    private $model = Records::class;

    public function paginate(int $offset)
    {
        return Records::with(['translations' => function ($query) {
            $query->where('language', 'ru');
        }])->where('status', 1)
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate($offset);
    }

    public function all()
    {
        return Records::with(['translations' => function ($query) {
            $query->where('language', 'ru');
        }])->where('status', 1)->get();
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
