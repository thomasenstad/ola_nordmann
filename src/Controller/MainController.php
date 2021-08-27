<?php

namespace App\Controller;

use App\Classes\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'page_name' => 'Hjem',
        ]);
    }


    /**
     * @Route("/news", name="news")
     */
    public function news(): Response
    {

        $newsDom = new News('https://www.aftenposten.no/');

        return $this->render('main/news.html.twig', [
            'controller_name' => 'MainController',
            'headlines' => $newsDom->get_headlines(),
            'page_name' => 'Siste nytt',
        ]);
    }

    /**
     * @Route("/savings", name="savings")
     */
    public function savings(): Response
    {

        return $this->render('main/savings.html.twig', [
            'controller_name' => 'MainController',
            'page_name' => 'Sparing',
        ]);
    }

}
