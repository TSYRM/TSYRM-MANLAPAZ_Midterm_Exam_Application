<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "iPhone 15 Pro", "brand" => "Apple", "price" => 1199],
            ["name" => "Samsung Galaxy S23 Ultra", "brand" => "Samsung", "price" => 1299],
            ["name" => "MacBook Pro 16", "brand" => "Apple", "price" => 2499],
            ["name" => "Sony WH-1000XM5", "brand" => "Sony", "price" => 399],
            ["name" => "Nintendo Switch OLED", "brand" => "Nintendo", "price" => 349],
        ];

        return view('products', compact('products'));
    }
}
