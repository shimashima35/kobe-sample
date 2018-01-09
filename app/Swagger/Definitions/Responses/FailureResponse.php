<?php
/**
 * Created by PhpStorm.
 * User: shimashima
 * Date: 2018/01/05
 * Time: 14:24
 */

namespace App\Swagger\Definitions\Responses;

use Kobe\Kobe;

class FailureResponse extends ApiResponse
{
    /**
     * FailureResponse constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->setProperties([
            'code'    => Kobe::makeInteger()->setExample(400),
            'message' => Kobe::makeString()->setExample('an error message'),
            'type'    => Kobe::makeString()->setExample('error'),
        ]);
    }
}