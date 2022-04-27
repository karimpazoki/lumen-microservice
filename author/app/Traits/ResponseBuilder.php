<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ResponseBuilder
{
    public function success($data, $message = "success",  $code = Response::HTTP_OK)
    {
        return [
            'code' => $code,
            'data' => $data,
            'message' => $message,
        ];
    }

    public function error($data, $message = "success",  $code = Response::HTTP_OK)
    {
        return [
            'code' => $code,
            'error' => $data,
            'message' => $message,
        ];
    }
}
