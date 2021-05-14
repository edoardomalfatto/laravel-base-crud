<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function contatti() {
        return view('contatti');
    }

    public function vestiti() {
        $vestiti = Dress::all();
        

        $data= [
            'vestiti' => $vestiti
        ];

        return view('vestiti', $data);
    }
}
