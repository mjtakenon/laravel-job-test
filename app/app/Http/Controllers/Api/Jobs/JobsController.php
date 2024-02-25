<?php

namespace App\Http\Controllers\Api\Jobs;

use App\Http\Controllers\Controller;
use App\Jobs\TestJob;
use App\Models\JobResult;

class JobsController extends Controller
{
    public function get()
    {
        $validator = \Validator::make(\Request::all(), [
            'limit' => 'integer|nullable|max:100',
        ]);

        if ($validator->fails()) {
            return $this->badRequest();
        }

        $validated = $validator->safe()->collect();
        $limit = $validated->get('limit', 100);

        $jobResults = JobResult::orderByDesc('id')->limit($limit)->get();

        return response()->json(['data' => $jobResults->map(function (JobResult $jobResult) {
            return $jobResult->toViewArray();
        })]);
    }

    public function post()
    {
        TestJob::dispatch();

        return response()->json(['result' => 'ok']);
    }
}
