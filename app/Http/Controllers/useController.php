<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class useController extends Controller
{
    public function index()
    {
        //get user
        $users = User::lastest()->get;

        //user to view
        return view('users', compact('users'));
    }
}
