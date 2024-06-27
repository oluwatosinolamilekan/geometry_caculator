<?php
namespace App\Helper;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ResponseAction
{
    public static function errorResponse($exception)
    {
        if ($exception instanceof HttpException) {
        return self::response(
            $exception->getMessage(), 
            $exception->getLine(), 
            $exception->getFile(), 
            $exception->getStatusCode()
        );
        }
       return  self::response(
        $exception->getMessage(),
        $exception->getLine(), 
        $exception->getFile(), 
        Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public static function response(
        $message, 
        $line, 
        $file,
        $statusCode)
    {
        $response = [
            'message' => $message,
            'line' => $line,
            'file' => $file,
            'status' => 'Failed',
            'code' => $statusCode
        ];
        return new JsonResponse($response);
    }
}