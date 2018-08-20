<?php

namespace App\Http\Controllers;

use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Foundation\Bus\DispatchesJobs;

class AppBaseController extends Controller
{
    use DispatchesJobs;

    protected $validator;

    protected $repository;

    public function makeResponse($result, $message, $code)
    {
        return [
            'status_code' => $code,
            'data'    => $result,
            'message' => $message,
        ];
    }

    public function failResponse($message, $code = 400)
    {
        if ($message instanceof MessageBag) {
            $message = formatErrors($message);
        }
        return Response::json($this->makeResponse([], $message, $code), $code, [], JSON_UNESCAPED_UNICODE);
    }

    public function successResponse($result = [], $message = "操作成功", $header = 200)
    {
        return Response::json($this->makeResponse($result, $message, $header), $header, [], JSON_UNESCAPED_UNICODE);
    }
}
