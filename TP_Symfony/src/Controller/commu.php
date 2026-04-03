<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class commu extends AbstractController
{

    #[route('/commu', name: 'diplay', methods: ['GET'])]
    public function diplay(Request $request): Response
    {
        $session = $request->getSession();

        return $this->render('/nav/commu.html.twig', ['pseudo' => $session->get('pseudo'), 'comments' => $session->get('comment', [])]);
    }


    #[route('/comment', methods: ['POST'])]
    public function comment(Request $request): Response
    {
        $session = $request->getSession();
        $pseudo = $session->get('pseudo');

        $comment = trim($request->request->get('comment', ''));
 
        if ($comment !== '') {
            $comments = $session->get('comment', []);
 
            $comments[] = [
                'pseudo'  => $pseudo,
                'comment' => $comment,
                'date'    => date('d/m/Y H:i'),
            ];
 
            $session->set('comment', $comments);
        }

        return $this->redirectToRoute('diplay');
    }

}




?>