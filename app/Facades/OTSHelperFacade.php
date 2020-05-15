<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class OTSHelperFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return "OTSHelper";
    }
}
