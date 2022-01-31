<?php

namespace App\Http\Controllers\Api;

class ResponseFormatter
{
    protected static $response = [
        'meta' => [
            'code'      => 200,
            'status'    => 'success',
            'message'   => null
        ],
        'data' => null,
        'access_token' => [
            'token_type' => 'Bearer',
            'token' => null
        ]
    ];

    public static function success($data = null, $token = null, $message = null)
    {
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;
        self::$response['access_token']['token'] = $token;

        return response()->json(self::$response, self::$response['meta']['code']);
    }

    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['meta']['code']);
    }
}
