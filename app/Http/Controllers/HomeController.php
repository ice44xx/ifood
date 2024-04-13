<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;

class HomeController extends Controller
{
    public function index() {
        $cupons = $this->getCupons();
        $restaurants = $this->getRestaurants();

        return view('index', ['cupons' => $cupons, 'restaurants' => $restaurants]);
    }

    private function getCupons() {
        $cupons = [
            [
                'title' => 'R$ 5 para restaurantes selecionados',
                'description' => 'Desconto de até 50% em restaurantes selecionados.',
                'expiration' => '10/03/2024',
            ],
            [
                'title' => 'R$ 15 para sua compra em Pet',
                'description' => 'Desconto de até 50% em restaurantes selecionados.',
                'expiration' => '22/06/2024',
            ],
            [
                'title' => 'R$ 10 Disponível',
                'description' => 'Desconto de até 50% em restaurantes selecionados.',
                'expiration' => '30/05/2024',
            ],
            [
                'title' => 'R$ 12 para sua compra em Pet',
                'description' => 'Desconto de até 50% em restaurantes selecionados.',
                'expiration' => '30/03/2024',
            ],
            [
                'title' => 'R$ 12 para Bebidas',
                'description' => 'Desconto de até 50% em restaurantes selecionados.',
                'expiration' => '20/04/2024',
            ],
        ];

        return $cupons;
    }

    private function getRestaurants() {
        $restaurants = Restaurants::all();
        return $restaurants;
    }
}
