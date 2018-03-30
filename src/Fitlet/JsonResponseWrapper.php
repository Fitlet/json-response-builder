<?php


namespace Fitlet;


use Fitlet\Model\JsonResponse;
use Slim\Http\Response;

class JsonResponseWrapper implements ResponseWrapper
{
    /**
     * @var JsonResponse
     */
    private $jsonResponse;

    public static function newInstance(): self
    {
        return new self();
    }

    public function wrap(Response $res)
    {
        return $res->withJson($this->jsonResponse, $this->jsonResponse->getStatus());
    }

    public function withJsonResponse(JsonResponse $jsonResponse): JsonResponseWrapper
    {
        $this->jsonResponse = $jsonResponse;
        return $this;
    }
}