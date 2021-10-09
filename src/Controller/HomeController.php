<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
    #[Route('/p', name: 'pannel')]
    public function PannelIndex(): Response
    {
        return $this->render('panel/index.html.twig');
    }
    #[Route('/c', name: 'checkout')]
    public function CheckIndex(): Response
    {
        return $this->render('checkout/index.html.twig');
    }
}
