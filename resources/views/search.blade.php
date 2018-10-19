@extends('layouts.master')

@section('title', 'Page Title')

@section('main')



    <div class="ui full-width">
    
        <div class="container">

            <div class="search-box">
                <input></input><button class="large"><i class="fas fa-search"></i></button>
                <h1><i class="fas fa-search"></i> Search results for 'Kwaidan'</h1>
            </div>
            
            <div id="view1" class="list"></div>  
        
        </div>
        
    </div>    
    
@endsection