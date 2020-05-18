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
        $str = \OTS::getTableColumnsByRiskId("risk_tz_total_debt",
            [
                "row_key" => "paIncbslt4EFSN6T5lK7wOOa7yq8Bw4rSJ1bSiJ/E6I=",
                "risk_id" => "RR2020051514584946777779606847336",
                "cert_no" => "c4keJSgMQE0zn/aw1mlxRfrPVyhb7ITqaZyaLSLcJA8=",
                "mobile" => "C1sw73iSe/ZRzW4HJBSq/A==",
            ]
        );
        dd($str);
    }
}
