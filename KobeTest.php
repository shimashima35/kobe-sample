<?php

use PHPUnit\Framework\TestCase;

include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/app/Swagger/Definitions/BaseDefinition.php';
include_once __DIR__ . '/app/Swagger/Definitions/Responses/ApiResponse.php';
include_once __DIR__ . '/app/Swagger/Definitions/Responses/FailureResponse.php';

class KobeTest extends TestCase
{
   public function test()
    {
        // Scan the whole directory for any PHP file and parse the class instances to Swagger definitions
        $definitions = \Kobe\Kobe::scanPSR4(
            'app/Swagger/Definitions/Responses',
            'App\\Swagger\\Definitions\\Responses\\'
        );
        fwrite(STDOUT, json_encode($definitions));
    }

}

