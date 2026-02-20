<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['title' => 'Inception', 'genre' => 'Science Fiction'],
        ['title' => 'The Godfather', 'genre' => 'Crime'],
        ['title' => 'Interstellar', 'genre' => 'Adventure'],
        ['title' => 'Parasite', 'genre' => 'Thriller'],
        ['title' => 'Spirited Away', 'genre' => 'Animation'],
        ['title' => 'The Dark Knight', 'genre' => 'Action'],
    ];

    public function index()
    {
        return view('products', ['products' => $this->products]);
    }

    public function byTheme($theme)
    {
        $filtered = array_filter($this->products, function($product) use ($theme) {
            return strtolower($product['genre']) === strtolower($theme);
        });
        return view('products', ['products' => $filtered, 'theme' => $theme]);
    }
}


