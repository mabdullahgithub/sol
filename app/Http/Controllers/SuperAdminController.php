<?php

namespace App\Http\Controllers;
use App\Models\User; // Import the User model
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Dashboard()
    { // Fetch all users from the 'users' table
        $users = User::all();

        return view('admin.dashboard', ['users' => $users]);
    }

    public function ViewUser()
    {
        // Fetch all users from the 'users' table
        $users = User::all();

        // Pass the user data to the 'users.blade.php' view
        return view('admin.users', ['users' => $users]);
    }

    public function CreateProducts()
    { 

        return view('admin.create_products');
    }

    

    public function storeProduct(Request $request)
    {
        // Store the product data without validation for simplicity
        $product = new Product([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
        ]);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagePath;
        }
    
        // Save the product to the database
        $product->save();
    
        // Redirect or return a response as needed
        return redirect()->route('admin.create_products')->with('success', 'Product created successfully');
    }
    
    public function ViewProducts()
    {
        // Fetch all products from the 'products' table (assuming you have a 'products' table)
        $products = Product::all();
    
        // Pass the product data to the 'view_products.blade.php' view
        return view('admin.view_products', ['products' => $products]);
    }
    


}
