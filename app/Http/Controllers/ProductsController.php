<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function getPrice() {
    return $this->cost + ($this->cost * $this->profit_margin / 100);
  }

}
