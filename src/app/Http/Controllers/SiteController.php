<?php

namespace App\Http\Controllers;

use App\Actions\RecordsAction;
use App\Models\Records;

class SiteController extends Controller
{
    private $recordsAction;

    public function __construct(RecordsAction $recordsAction)
    {
        $this->recordsAction = $recordsAction;
    }

    public function index()
    {
        /** @var $result Records[] */
        $results = $this->recordsAction->getRecords();

        return view('index', [
            'results' => $results
        ]);
    }
}
