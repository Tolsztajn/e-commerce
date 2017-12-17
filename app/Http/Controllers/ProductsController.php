<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index() {
$products = \App\Product::all();

$variables = [
  "products" => $products,
];

return view('products.index', $variables);
}
public function create() {
	return view('products.create');
}
public function store(Request $request) {
    $rules = [
        "name" => "required|unique:products",
        "cost" => "required|numeric",
        "profit_margin" => "required|numeric",
        "category_id" => "required|numeric|between:1,3"
    ];

    $messages = [
        "required" => "El :attribute es requerido!",
        "unique" => "El :attribute tiene que ser único!",
        "numeric" => "El :attribute tiene que ser numérico!",
        "between" => "El :attribute tiene que estar entre :min y :max!"
    ];

    $request->validate($rules, $messages);

    $producto = \App\Product::create([
        'name' => $request->input('name'),
        'cost' => $request->input('cost'),
        'profit_margin' => $request->input('profit_margin'),
        'category_id' => $request->input('category_id')
    ]);

    return redirect('/productos');
}
}
