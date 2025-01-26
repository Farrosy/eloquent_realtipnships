<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //get user
        $users = User::latest()->get();

        //user to view
        return view('users', compact('users'));
    }
}
