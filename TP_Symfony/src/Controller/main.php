<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class main extends AbstractController
{
    
    #[route('/', methods: ['GET'])]
    public function diplay(): Response
    {
        return $this->render('/nav/main.html.twig');
    }

    #[route('/acceuil', methods: ['GET', 'POST'])]
    public function display(Request $request): Response
    {

        $session = $request->getSession();

        if ($request->isMethod('POST')){
            $session->set('pseudo', $request->request->get('pseudo'));
        }
        
        return $this->render('/nav/acceuil.html.twig', ['pseudo' => $session->get('pseudo')]);
    }

}




?>