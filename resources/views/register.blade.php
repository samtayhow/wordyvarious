@extends('layouts.master')

@section('title', 'Page Title')

@section('main')

    <div class="account">
    
        <div class="container">
    
            <div class="full-width" data-role="card">
                <form id="register">
                    <header data-role="card-header">
                        <h1><i class="fas fa-user-plus"></i> Register account</h1>
                    </header>
                    <main>
                        <div class="form-group">
                            
                            <input placeholder="User name"></input>
                            <span class="helper muted">Your <label>user name</label> can be alphanumerical, but must be unique. (Limited to 20 characters.)</span>
                        </div>
                        <div class="form-group">
                            <input placeholder="Email address"></input>
                            <span class="helper muted">Please provide a valid <label>email address</label>. (We promise not to sell your email address to anyone.)</span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password"></input>
                            <span class="helper muted">Your <label>password</label> must be at least 6 characters long, and contain a letter and a number.</span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="large">Join <i class="fas fa-arrow-alt-circle-right"></i></button><br/>
                            <span class="helper muted">By creating an account, I accept the <a href="">terms & conditions</a> and <a href="">privacy policy</a>.</span>
                        </div>
                    </main>
                </form>
            </div>   
        
        </div>
        
    </div>
    
@endsection