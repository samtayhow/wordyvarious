<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function wordList()
    {
        return view('list');
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