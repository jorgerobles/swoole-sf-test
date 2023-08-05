<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/','root',methods: Request::METHOD_GET)]
class TestController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([]);
    }
}