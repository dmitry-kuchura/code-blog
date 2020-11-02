<?php

namespace App\Http\Controllers;

use App\Actions\RecordsAction;
use App\Models\Records;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function inner(Request $request)
    {
        /** @var $result Records */
        $result = $this->action->getRecord($request->route('alias'));

        $this->action->viewRecord($result->id);

        return view('blog.inner', [
            'result' => $result
        ]);
    }
}
