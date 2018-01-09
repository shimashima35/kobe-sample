<?php

namespace App\Swagger\Definitions;

use Kobe\Schemas\Definition;

/**
 * Class BaseDefinition
 *
 * @package App\Swagger
 */
abstract class BaseDefinition extends Definition
{
    /**
     * @return string
     */
    public function getBaseNamespace()
    {
        return 'App\\Swagger\\Definitions\\';
    }
}
