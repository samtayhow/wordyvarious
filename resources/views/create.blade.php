@extends('layouts.master')

@section('title', 'Page Title')

@section('main')

    <div class="container">

        <h2><i class="fas fa-pencil-alt"></i> Create a list</h2>
        <div class="full-width" data-role="card">
            <form id="create-list">
                <header data-role="card-header">
                    <div class="form-group">
                        <label>Title</label>
                        <h3><input placeholder="Name your list"></input></h3>
                        <span class="helper muted">Title your list (limited to 50 characters).</span>
                    </div>
                </header>
                <main>
                    <div class="form-group">
                        <label>Description</label>
                        <input placeholder="Describe your list"></input>
                        <span class="helper muted">Describe what this list is about (limited to 300 characters).</span>
                    </div>
                    <div class="form-group">
                        <label>Words</label>
                        <textarea placeholder="Give us some words"></textarea>
                        <span class="helper muted">Enter the words for your list here, separated by commas or spaces.</span>
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <textarea placeholder="Tag your list"></textarea>
                        <span class="helper muted">Enter some tags for your list here, separated by commas or spaces.</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="large"><i class="fas fa-upload"></i> Publish List</button>
                    </div>
                </main>
            </form>
        </div>       
    
    </div>

@endsection