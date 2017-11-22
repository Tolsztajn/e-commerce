<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
//creamos el metodo para la ruta
    public function index() {
      	$products = \App\Product::all();

      	$variables = [
      		"products" => $products,
      	];

      	return view('products.index', $variables);
}


}
