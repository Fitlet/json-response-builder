<?php


namespace Fitlet;


use Slim\Http\Response;

interface ResponseWrapper
{
    public function wrap(Response $res);
}