<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class ProductController extends Controller
{
    public function product()
    {
        $products = [
            ['name' => 'iPhone 14', 'price' => 999, 'category' => 'Smartphone'],
            ['name' => 'Samsung Galaxy S23', 'price' => 899, 'category' => 'Smartphone'],
            ['name' => 'MacBook Pro', 'price' => 1999, 'category' => 'Laptop'],
            ['name' => 'Dell XPS 13', 'price' => 1499, 'category' => 'Laptop'],
            ['name' => 'Sony WH-1000XM5', 'price' => 399, 'category' => 'Headphones']
        ];

        return view('product', compact('products'));
    }
}
