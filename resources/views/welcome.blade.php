@extends('layouts.master')

@section('title', 'Page Title')

@section('main')
    
    <div class="cta">
    
        <div class="container">
    
            <div class="full-width" data-role="card">
                
                    <section>
                    
                        <h1><i class="fas fa-bolt"></i> Creativity through Chaos!</h1>
                        <p>Keep lists of words, then play with them to create new worlds at <strong>wordyvario.us</strong>. Switch up your creative process. Find your new aesthetic. We believe that, when it comes to sparking imagination, the messier the better.</p>
                        <button class="large"><i class="fas fa-user-plus"></i> Get Creative</button>
                        
                    </section>
                
            </div>
        
        </div>
        
    </div>
    
   
    
    <div class="container">
        
        
        
        
        
        <h2><i class="fas fa-sun"></i> Spotlight</h2>
        
        <div id="spotlight" class="list"></div>
        
        
        
        
        <h2><i class="fas fa-clock"></i> Recently...</h2>
        
        <div class="full-width" data-role="card">
            <header data-role="card-header">
                <h3><i class="fas fa-leaf"></i> New Lists</h3>
            </header>
            <main>
                <section>
                
                    <div id="view4"></div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Delicious Morning</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>2</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>0</a> <span class="sr-only">shares</span></div>
                    </div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Monster Mash</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>21</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>2</a> <span class="sr-only">shares</span></div>
                    </div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Country Livin'</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>1</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>0</a> <span class="sr-only">shares</span></div>
                    </div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">A Night at the Opera</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>78</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>2</a> <span class="sr-only">shares</span></div>
                    </div>
                    
                </section>
            </main>
        </div>
        
        
















        
        
        

        <div class="full-width" data-role="card">
            <header data-role="card-header">
                <h3><i class="fas fa-star"></i> Just-faved</h3>
            </header>
            <main>
                <section>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">A Night at the Opera</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>78</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>2</a> <span class="sr-only">shares</span></div>
                    </div>
                
                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Monster Mash</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>21</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>2</a> <span class="sr-only">shares</span></div>
                    </div>
                
                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Fairytales</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>4</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>0</a> <span class="sr-only">shares</span></div>
                    </div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Delicious Morning</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>2</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>0</a> <span class="sr-only">shares</span></div>
                    </div>

                    <div class="list snippet">
                        <a href="">▰ <span class="list title">Country Livin'</span></a>
                        <div class="byline">by <a href="">Taylor1</a></div>
                        <div class="byline"><i class="fas fa-star"></i> <a>1</a> <span class="sr-only">faves</span> <i class="fas fa-share"></i> <a>0</a> <span class="sr-only">shares</span></div>
                    </div>
                    
                </section>
            </main>
        </div>
    </div>
    

@endsection