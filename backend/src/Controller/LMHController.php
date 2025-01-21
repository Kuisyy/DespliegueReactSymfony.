<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LMHController extends AbstractController
{
    #[Route('/api/lmh', name: 'lmh_hello')]
    public function index(): Response
    {
        return new Response('Symfony de Luis Maldonado Hernandez Responde a la llamada de
	React');
    }
}
