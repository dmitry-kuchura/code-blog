<?php

namespace App\Repositories;

interface Repository
{
    public function paginate(int $offset);

    public function all();

    public function store(array $data);

    public function update(array $data);

    public function get(int $id);

    public function destroy(int $id);
}
