<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        $posts = [
            ['title' => 'Primer Post'],
            ['title' => 'Segundo Post'],
            ['title' => 'Tercer Post'],
            ['title' => 'Cuarto Post'],
            ['title' => 'Quinto Post'],
        ];
        return view('blog', ['posts' => $posts]);
    }
}
