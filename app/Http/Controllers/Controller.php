<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseOk($message = 'success', $data = null, $extraData = [])
    {
        $response = [
                'status' => Response::HTTP_OK,
                'message' => $message,
                'data' => $data
            ] + $extraData;

        return response($response);
    }

    public function responseError($message = null, $code = null)
    {
        $response = [
            'status' => empty($code) ? Response::HTTP_BAD_REQUEST : $code,
            'message' => !empty($message) ? $message : 'Unknown Error',
        ];

        return response($response);
    }
}
