<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('tasks.index', [
            'users' => $users,
        ]);
    }
}
