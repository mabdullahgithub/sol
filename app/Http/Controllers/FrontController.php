<?php

namespace App\Http\Controllers;
use App\Models\User; // Import the User model
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.index');        
    }
    public function qoute()
    {
        return view('frontend.quote');
    }

    public function Product()
    {
        // Fetch all products from the 'products' table (assuming you have a 'products' table)
        $products = Product::all();
    
        // Pass the product data to the 'view_products.blade.php' view
        return view('frontend.products', ['products' => $products]);
    }
    
}
