<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function __invoke(): Response
    {
        return new Response('Home');
    }
}