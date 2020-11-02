<?php

namespace App\Http\Controllers;

use App\Actions\RecordsAction;
use App\Models\Records;
use Illuminate\Http\Request;

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
        /** @var $result Records[] */
        $result = $this->action->getRecord($request->route('alias'));

//        dd($result);

        return view('blog.inner', [
            'result' => $result
        ]);
    }
}
