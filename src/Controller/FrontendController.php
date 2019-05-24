<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="frontend")
     */
    public function index()
    {
        return $this->render('frontend/index.html.twig');
    }
}
