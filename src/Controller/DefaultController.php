<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController
{
    public function index()
    {
        return new Response(
            '<html><body>front page</body></html>'
        );
    }
}