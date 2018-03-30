<?php


namespace Fitlet;


use Fitlet\Model\JsonResponse;
use Fitlet\Util\Response;

class JsonResponseFactory
{
    public static function create(string $message, int $status, array $details): JsonResponse
    {
        return JsonResponse::newInstance()
            ->setMessage($message)
            ->setDetails($details)
            ->setStatus($status);
    }

    public static function success(string $message, array $details): JsonResponse
    {
        return self::create($message, Response::HTTP_OK, $details);
    }

    public static function notFound(string $message, array $details): JsonResponse
    {
        return self::create($message, Response::HTTP_NOT_FOUND, $details);
    }

    public static function error(string $message, array $details): JsonResponse
    {
        return self::create($message, Response::HTTP_INTERNAL_SERVER_ERROR, $details);
    }
}