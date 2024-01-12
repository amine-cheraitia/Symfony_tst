<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;



class HomeController
{


    public function bonjour()
    {
        return new Response("hello");
    }
}