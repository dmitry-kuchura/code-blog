<?php

namespace App\Http\Controllers;

use App\Actions\RecordsAction;
use App\Models\Records;

class BlogController extends Controller
{
    private $action;

    public function __construct(RecordsAction $recordsAction)
    {
        $this->action = $recordsAction;
    }

    public function list()
    {
        /** @var $result Records[] */
        $results = $this->action->getRecords();

        return view('blog.index', [
            'results' => $results
        ]);
    }

    public function inner()
    {
        return view('blog.inner');
    }
}
