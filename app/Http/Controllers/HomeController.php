<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class HomeController extends Controller
{
    public function index(){
        //vado a recuperare tutti i valori della tabella dresses SELECT * from 'dresses'
        $my_dresses = Dress::all();
        $data = [
            //passo i dati alla view per poterli visualizzare
            'dresses' => $my_dresses
        ];
        return view('home', $data);
    }
}
