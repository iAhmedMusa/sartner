<div class="container">
    <nav class="custom_navbar">
        <div class="logo">
            <a href="">
                <img src="{{asset('images/logo.png')}}" alt="logo">    
            </a>
        </div>
        <ul>
            <li><a href="#" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="#" class="{{ Route::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="#" class="{{ Route::is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="#" class="{{ Route::is('porfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="#" class="{{ Route::is('pages') ? 'active' : '' }}">Pages</a></li>
            <li><a href="#" class="{{ Route::is('blog') ? 'active' : '' }}">Blog</a></li>
            <li><a href="#" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </nav>
</div>
