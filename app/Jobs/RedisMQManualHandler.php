<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;

class RedisMQManualHandler
{
    public function handle($job, $data)
    {
        Log::info("In Redis Manual handler!");
        Log::info($data);
        $job->delete();
    }

    public function handle2($job, $data)
    {
        Log::info("In Redis Manual handler! - handle2");
        Log::info($data);
        $job->delete();
    }

    public function fire($job, $data)
    {
        Log::info("In Redis Manual handler! - Fire!");
        Log::info($data);
        $job->delete();
    }
}