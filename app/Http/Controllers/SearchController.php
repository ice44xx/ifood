<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');
        $restaurants = Restaurants::where('title', 'like', '%' . $search . '%')->get();
        return view('pages.restaurantes', ['restaurants' => $restaurants, 'search' => $search]);
    }
}
