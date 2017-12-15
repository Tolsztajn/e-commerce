<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function getPrice() {
    return $this->cost + ($this->cost * $this->profit_margin / 100);
  }
  public function show($id) {
  	$product = \App\Product::find($id);

  	$variables = [
  		"product" => $product,
  	];

  	return view('products.show', $variables);
  }
  public function create() {
	return view('products.create');
}


}
