# Json Response Wrapper

[![Build Status](https://travis-ci.org/Fitlet/json-response-wrapper.svg?branch=master)](https://travis-ci.org/Fitlet/json-response-wrapper)

Json Response Wrapper is a library which is responsible for wrapping
PHP Slim Response to json standardized format.

### Wrapping response

Wrapping process is described in example below.

``` php
public function testAction(Response $res, Request $req)
{
    $jsonResponse = JsonResponseFactory::success("test message", []);
    
    return JsonResponseWrapper::newInstance()
        ->withJsonResponse($jsonResponse)
        ->wrap($res);
}
```