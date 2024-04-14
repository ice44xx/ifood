<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;

class HomeController extends Controller
{
    public function index() {
        $search = request('search');
        if($search) {
            $restaurants = Restaurants::where('title', 'like', '%'.$search.'%')->get();
        } else {
            $restaurants = Restaurants::all();
        }

        $cupons = $this->getCupons();

        return view('index', ['cupons' => $cupons, 'restaurants' => $restaurants, 'search' => $search]);
    }


    public function createUser() {
        return view('user.register');
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

    public function show($id) {
        $restaurantName = Restaurants::findOrFail($id);

        return view('pages.info', ['restaurant' => $restaurantName]);
    }
}
