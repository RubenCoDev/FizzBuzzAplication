<?php

namespace Apps\Shared\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function __invoke(
    ): JsonResponse
    {
        return new JsonResponse(
            [
                'ok' => 'Everything Done'
            ],
            Response::HTTP_OK
        );
    }
}
