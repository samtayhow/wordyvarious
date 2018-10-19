<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return response(User::all(),200);
    }
 
    public function show($u)
    {
        return User::where('username', $u)->first() ?? abort(404);
    }

    public function lookup($u)
    {
        return User::where('id', $u)->first() ?? abort(404);
    }
    
}