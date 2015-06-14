<?php

namespace CompareAsiaGroup\GuzzleCache\Facades;

use Illuminate\Support\Facades\Facade;
use GuzzleHttp\Client;

class Guzzle extends Facade
{

    protected static function getFacadeAccessor()
    {

    	$client = Client;

        return $client;
        
    }

}
