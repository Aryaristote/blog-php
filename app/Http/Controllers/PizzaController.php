<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller{
    public function index(){
        $pizzas = [
            ['name' => 'Hawai Pizza', 'price' => 4567383 ],
            ['name' => 'Bolden Pizza', 'price' => 652627239 ],
            ['name' => 'Simple Pizza', 'price' => 6353672 ],
            ['name' => 'Ketchup Pizza', 'price' => 8283737 ],
            ['name' => 'Mashup Pizza', 'price' => 533678 ],
        ];

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id){
        return view('detail', ['id' => $id]);
    }
}
