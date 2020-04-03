<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController // gives us shorthand methods (render)
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnv) // just to prove that twig is also a service
    {
        $html = $twigEnv->render('question/homepage.html.twig'); // twig service method
        return new Response($html);

        //return $this->render('question/homepage.html.twig'); // twig shorthand method
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}