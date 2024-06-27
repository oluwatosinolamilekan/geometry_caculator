<?php

namespace App\Listeners;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();
        $response = new JsonResponse([
            'message' => $exception->getMessage(),
            'body' => [],
            'line' => $exception->getLine(),
            'file' => $exception->getFile(),
            'status' => 'Failed'
        ], Response::HTTP_INTERNAL_SERVER_ERROR);

        $event->setResponse($response);
    }
}