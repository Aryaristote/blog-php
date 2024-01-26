<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller{
    public function index(){
        $country = [
            ['name' => 'Congo', 'continent' => 'Africa', 'size' => 4567383 ],
            ['name' => 'Rwanda', 'continent' => 'America', 'size' => 652627239 ],
            ['name' => 'Mali', 'continent' => 'Chine', 'size' => 6353672 ],
            ['name' => 'Uganda', 'continent' => 'Africa', 'size' => 8283737 ],
            ['name' => 'Kenya', 'continent' => 'Europe', 'size' => 533678 ],
        ];

        return view('country', [
            'country' => $country
        ]);
    }
}
