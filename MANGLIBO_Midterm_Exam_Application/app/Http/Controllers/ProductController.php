<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Inception', 'genre' => 'Science Fiction'],
            ['title' => 'The Godfather', 'genre' => 'Crime'],
            ['title' => 'Interstellar', 'genre' => 'Adventure'],
            ['title' => 'Parasite', 'genre' => 'Thriller'],
            ['title' => 'Spirited Away', 'genre' => 'Animation'],
            ["title" => "The Dark Knight", "genre" => "Action"],
        ];
        return $products;
    }
}


