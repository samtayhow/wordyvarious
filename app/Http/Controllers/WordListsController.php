<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\WordList;

class WordListsController extends Controller
{
    public function index()
    {
        return response(WordList::all(),200);
    }
 
    public function show($slug)
    {
        return WordList::where('slug', $slug)->first() ?? abort(404);
    }
 
    public function store(Request $request)
    {        
        $wordlist = new WordList;
        $wordlist->title = $request->title;
        $wordlist->slug = $request->title;
        $wordlist->author = 1;
        $wordlist->description = $request->description;
        $wordlist->words = $request->words;
        $wordlist->tags = $request->tags;
        $wordlist->save();
        return response()->json($wordlist, 201);
    }
 
    public function update()
    {

    }
 
    public function delete($slug)
    {
        WordList::where('slug', $slug)->first()->delete();
        return $slug . " deleted";
    }
}
