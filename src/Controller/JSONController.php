<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Card\Deck;

class JSONController extends AbstractController
{
    /**
     * @Route("/card/api/deck", name="jsonapi")
     */
    public function jsonapi(): Response
    {
        $deck = new Deck();
        $cards = [];
        foreach ($deck->deck() as $card) {
            array_push($cards, $card->value());
        }
        $data = [
            'cards' => $cards,
        ];

        return new JsonResponse($data);
    }
}
