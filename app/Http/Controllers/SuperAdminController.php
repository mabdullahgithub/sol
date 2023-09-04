<?php

namespace App\Http\Controllers;
use App\Models\User; // Import the User model

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
}
