<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class HomeController extends Controller
{
    public function index(){
        $my_dresses = Dress::all();
        $data = [
            'dresses' => $my_dresses
        ];
        return view('home', $data);
    }
}
