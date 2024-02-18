<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;

class IndexController extends Controller
{
    public function get()
    {
        TestJob::dispatch();

        return response()->json(['result' => 'ok']);
    }
}
