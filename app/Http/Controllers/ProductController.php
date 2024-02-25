<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category1()
{
    return view('products', ['product' => 'food-beverage']);
}
public function category2()
{
    return view('products', ['product' => 'beauty-health']);
}
public function category3()
{
    return view('products', ['product' => 'home-care']);
}
public function category4()
{
    return view('products', ['product' => 'baby-kid']);
}
}
