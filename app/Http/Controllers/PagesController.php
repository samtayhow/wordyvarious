<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\WordList;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
 
    public function play()
    {
        return view('play');
    }

    public function create()
    {
        return view('create');
    }

    public function wordList($u, $slug)
    {
        $u = User::where('username', $u)->first() ?? abort(404);
        return view('list', ['slug' => $slug, 'author' => $u->username]);
    }

    public function wordLists()
    {
        return view('lists');
    }    
    
    public function search()
    {
        return view('search');
    }

    public function about()
    {
        return view('about');
    }

    public function user($u)
    {
        return view('user');
    }

    public function users()
    {
        return view('users');
    }
    
}