<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurants::all();

        return view('pages.restaurantes', ['restaurants' => $restaurants]);
    }

    public function show($id) {
        $restaurantName = Restaurants::findOrFail($id);

        return view('pages.info', ['restaurant' => $restaurantName]);
    }
}
