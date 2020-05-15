<?php

namespace App\Http\Controllers;

use Aliyun\OTS\OTSClient;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $otsClient = new OTSClient(array(
            'EndPoint' => "<your endpoint>",
            'AccessKeyID' => "<your access id>",
            'AccessKeySecret' => "<your access key>",
            'InstanceName' => "<your instance name>"
        ));
        dd($otsClient);
    }
}
