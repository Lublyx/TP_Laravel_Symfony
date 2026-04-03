<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class games extends AbstractController
{
        private function findGameById(int $id): ?array
    {
        foreach ($this->getGames() as $game) {
            if ($game['id'] === $id) {
                return $game;
            }
        }
        return null;
    }
 

    #[Route('/games', methods: ['GET'])]
    public function display(Request $request): Response
    {
        $session = $request->getSession();
 
        $search = trim($request->query->get('search', ''));
        $genre  = $request->query->get('genre',  'Tous');
        $prix   = $request->query->get('prix',   'Tous');
        $mode   = $request->query->get('mode',   'Tous');
        $sort   = $request->query->get('sort',   'popularite');
 
        $games = $this->getGames();
 
        $games = array_filter($games, function ($game) use ($search, $genre, $prix, $mode) {
 
            $nameMatch = str_contains(mb_strtolower($game['name']), mb_strtolower($search));
            if ($search && !$nameMatch) {
                return false;
            }
 
            if ($genre !== 'Tous' && $game['genre'] !== $genre) {
                return false;
            }
 
            if ($mode !== 'Tous' && $game['mode'] !== $mode) {
                return false;
            }
 
            if ($prix === 'Gratuit' && !$game['free']) {
                return false;
            }
 
            if ($prix === 'Moins de 15' && ($game['free'] || $game['price'] >= 15)) {
                return false;
            }
 
            if ($prix === 'Moins de 30' && ($game['free'] || $game['price'] >= 30)) {
                return false;
            }
 
            if ($prix === 'En promo' && $game['discount'] === 0) {
                return false;
            }
 
            return true;
        });
 
        usort($games, function ($a, $b) use ($sort) {
            if ($sort === 'price_asc')  return $a['price']    <=> $b['price'];
            if ($sort === 'price_desc') return $b['price']    <=> $a['price'];
            if ($sort === 'discount')   return $b['discount'] <=> $a['discount'];
            return 0;
        });
 
        return $this->render('/nav/games.html.twig', [
            'pseudo'  => $session->get('pseudo'),
            'games'   => array_values($games),
            'filters' => compact('search', 'genre', 'prix', 'mode', 'sort'),
        ]);
    }
 
 
    #[Route('/games/{id}', name: 'detail', methods: ['GET'])]
    public function detail(int $id, Request $request): Response
    {
        $session = $request->getSession();
 
        $game = $this->findGameById($id);
 
        $comments = $session->get('comments_' . $id, []);
 
        return $this->render('/nav/detail.html.twig', [
            'pseudo'   => $session->get('pseudo'),
            'game'     => $game,
            'comments' => $comments,
        ]);
    }
 
 
    #[Route('/games/{id}/comment', methods: ['POST'])]
    public function addComment(int $id, Request $request): Response
    {
        $session = $request->getSession();
 
        $pseudo  = $session->get('pseudo', 'Anonyme');
        $message = trim($request->request->get('message', ''));
 
        if ($message !== '') {
            $comments = $session->get('comments_' . $id, []);
 
            $comments[] = [
                'pseudo'  => $pseudo,
                'message' => $message,
                'date'    => date('d/m/Y H:i'),
            ];
 
            $session->set('comments_' . $id, $comments);
        }
 
        return $this->redirectToRoute('detail', ['id' => $id]);
    }

    private function getGames(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Arma Reforger',
                'description' => 'Un FPS réaliste qui vous plonge au cœur de la Seconde Guerre mondiale.',
                'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1874880/capsule_616x353.jpg',
                'tags' => ['FPS', 'Action', 'Multijoueur'],
                'genre' => 'FPS',
                'price' => 29.99,
                'old_price' => 49.99,
                'discount' => 40,
                'free' => false,
                'mode' => 'Multijoueur',
            ],
            [
                'id' => 2,
                'name' => 'Need For Speed',
                'description' => 'Le jeu de course légendaire. Tuning, vitesse et police à vos trousses.',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202211/2510/oAWEVsqIwM2Db534bhSLT6lp.png',
                'tags' => ['Course', 'Arcade'],
                'genre' => 'Course',
                'price' => 0,
                'old_price' => null,
                'discount' => 0,
                'free' => true,
                'mode' => 'Solo',
            ],
            [
                'id' => 3,
                'name' => 'Escape From Tarkov',
                'description' => 'FPS hardcore de survie dans une zone de guerre.',
                'image' => 'https://www.goclecd.fr/wp-content/uploads/escape-from-tarkov-gift-code_resized.webp',
                'tags' => ['FPS', 'Réaliste', 'Survie'],
                'genre' => 'FPS',
                'price' => 79.99,
                'old_price' => 99.99,
                'discount' => 25,
                'free' => false,
                'mode' => 'Multijoueur',
            ],
            [
                'id' => 4,
                'name' => 'FIFA 2033',
                'description' => 'La simulation de football ultime avec tous les clubs officiels.',
                'image' => 'https://leclaireur.fnac.com/wp-content/uploads/2022/09/fifa-vinicius-1256x826.jpg',
                'tags' => ['Sport', 'Football'],
                'genre' => 'Sport',
                'price' => 24.99,
                'old_price' => null,
                'discount' => 0,
                'free' => false,
                'mode' => 'Solo',
            ],
            [
                'id' => 5,
                'name' => 'Ghost Recon Wildlands',
                'description' => 'Opérations tactiques en monde ouvert dans les jungles boliviennes.',
                'image' => 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/460930/capsule_616x353.jpg',
                'tags' => ['FPS', 'Action', 'Co-op'],
                'genre' => 'FPS',
                'price' => 14.99,
                'old_price' => 29.99,
                'discount' => 50,
                'free' => false,
                'mode' => 'Co-op',
            ],
            [
                'id' => 6,
                'name' => 'Ready Or Not',
                'description' => 'Unité d\'élite SWAT en intervention tactique.',
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202504/0914/263dd759a82791236ec990ec3e0930b9dbd5cca948b25c75.jpg',
                'tags' => ['FPS', 'Réaliste', 'Tactique'],
                'genre' => 'FPS',
                'price' => 34.99,
                'old_price' => null,
                'discount' => 0,
                'free' => false,
                'mode' => 'Co-op',
            ],
            [
                'id' => 7,
                'name' => 'DCS World',
                'description' => 'Le simulateur de combat aérien le plus réaliste au monde.',
                'image' => 'https://www.digitalcombatsimulator.com/upload/iblock/e8a/0hwm640qpoo3qzz7b03s24ol8w0trq3k/dcs_home%20page_cover.png',
                'tags' => ['Simulation', 'Aviation'],
                'genre' => 'Simulation',
                'price' => 0,
                'old_price' => null,
                'discount' => 0,
                'free' => true,
                'mode' => 'Solo',
            ],
            [
                'id' => 8,
                'name' => 'Euro Truck Simulator 2',
                'description' => 'Traversez l\'Europe au volant de votre semi-remorque.',
                'image' => 'https://gaming-cdn.com/images/products/309/orig/euro-truck-simulator-2-pc-mac-jeu-steam-europe-us-canada-cover.jpg',
                'tags' => ['Simulation', 'Conduite'],
                'genre' => 'Simulation',
                'price' => 9.99,
                'old_price' => 24.99,
                'discount' => 60,
                'free' => false,
                'mode' => 'Solo',
            ],
        ];
    }
}