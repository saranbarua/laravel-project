<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', ['users' => $users]);
    }
}