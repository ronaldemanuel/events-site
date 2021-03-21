<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Ronald";
        $idade = 18;
        $arr = [10, 20, 30, 40, 50];
        $nomes = ["Maria", "João", "Daniel", "Mônica"];

        return view('welcome', 
            [
                'nome' => $nome, 
                'pesIdade' => $idade, 
                'estudo' => "Programação",
                'array' => $arr,
                'nomes' => $nomes,
            ]
        );
    }

    public function create() {
        return view('events.create');
    }
}
