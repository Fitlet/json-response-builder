<?php

namespace Fitlet;


use Fitlet\Model\JsonResponse;
use Fitlet\Util\Response;
use PHPUnit\Framework\TestCase;

class JsonResponseFactoryTest extends TestCase
{

    public function testSuccess()
    {
        $this->assertStatus(Response::HTTP_OK, JsonResponseFactory::success("test", []));
    }

    public function testNotFound()
    {
        $this->assertStatus(Response::HTTP_NOT_FOUND, JsonResponseFactory::notFound("test", []));
    }

    public function testError()
    {
        $this->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR, JsonResponseFactory::error("test", []));
    }

    private function assertStatus(int $expected, JsonResponse $res)
    {
        $this->assertEquals($expected, $res->getStatus());
    }
}
