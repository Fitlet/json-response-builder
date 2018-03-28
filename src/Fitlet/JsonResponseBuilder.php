<?php


namespace Fitlet;

use Fitlet\Model\JsonResponse;
use Slim\Http\Response;

class JsonResponseBuilder
{
    /**
     * @var Response
     */
    private $original;

    public static function newInstance(): self
    {
        return new self();
    }

    public function build(): JsonResponse
    {

    }
}