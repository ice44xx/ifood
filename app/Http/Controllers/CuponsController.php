<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuponsController extends Controller
{
    public function index() {
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

        return view('index', ['cupons' => $cupons]);
    }

    public function create() {
        return view ('user.create');
    }
}
