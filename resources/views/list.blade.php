@extends('layouts.master')

@section('title', 'Page Title')

@section('main')

    <div class="container">
        <div id="ShowList" class="list" data-slug="{{ $slug }}" data-author="{{ $author }}"></div>   
    </div>

@endsection