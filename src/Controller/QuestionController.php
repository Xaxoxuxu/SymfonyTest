<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('film');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show(string $slug)
    {
        return new Response("Path: $slug");
    }
}