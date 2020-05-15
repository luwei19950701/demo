<?php

namespace App\Console\Commands;

use Aliyun\OTS\OTSClient;
use App\Models\Demo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;

class DemoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aaaa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//
        $str = \OTS::getTableColumnsByRiskId("risk_upa_data",
            [
                "row_key" => "0RsrkEUonWQmSQh4HIDBdppkIBVELTFAHtGqqd/v0AM=",
                "risk_id" => "RR2020040219434556377779361556906",
                "cert_no" => "dBtH98A6f46F6bCwu30iE2b3kciNVEolEwZW/7ix7Cw=",
                "mobile" => "3GmkU1BSxZZ0JqwFRgfY4g==",
            ]
        );
        dd($str);
    }
}
