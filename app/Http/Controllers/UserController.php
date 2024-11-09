<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // This method will display a list of users and their liked dogs
    public function index()
    {
        $users = User::with('likedDogs')->get(); // Assuming a relationship 'likedDogs' exists on User
        return view('users.index', compact('users'));
    }
}
