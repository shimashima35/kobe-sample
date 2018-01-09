<?php

namespace App\Swagger\Definitions\Responses;

use App\Swagger\Definitions\BaseDefinition;
use Kobe\Kobe;

/**
 * Class ApiResponse
 *
 * @package App\Swagger\Definitions\Responses
 */
class ApiResponse extends BaseDefinition
{
    /**
     * DemoResponse constructor.
     */
    public function __construct()
    {
        $this->setProperties([
            'code'    => Kobe::makeInteger(),
            'message' => Kobe::makeString(),
            'type'    => Kobe::makeString(),
        ]);
    }
}
