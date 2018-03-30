<?php

namespace Fitlet\Model;

class JsonResponse implements \JsonSerializable
{
    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $message;

    /**
     * @var array
     */
    private $details;

    public static function newInstance()
    {
        return new self();
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): JsonResponse
    {
        $this->status = $status;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): JsonResponse
    {
        $this->message = $message;
        return $this;
    }

    public function getDetails(): array
    {
        return $this->details;
    }

    public function setDetails(array $details): JsonResponse
    {
        $this->details = $details;
        return $this;
    }

    public function toArray(): array
    {
        return [
            "status" => $this->getStatus(),
            "message" => $this->getMessage(),
            "details" => $this->getDetails()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}