<div class="top-line"></div>
<section class="container row nav">
    <a href="#" class="logo">VZW WIEBE</a> 
    <div class="toggleMenu" onclick="toggleMenu();"></div>
    <nav class="navigation row">
        <ul class="primary-link row">
            <li class="{{ (request()->Is('/')) ? 'active-btn' : ''}}">
                <a href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="{{ (request()->Is('home/activiteiten')) ? 'active-btn' : ''}}">
                <a href="{{ route('home.activiteiten') }}">Activiteiten</a>
            </li>
            <li><a href="#">Foto's</a></li>
            <li class="{{ (request()->Is('home/blog')) ? 'active-btn' : ''}}"><a href="{{ route('home.blog') }}">Blog</a></li>
            <li class="{{ (request()->Is('contact/contact')) ? 'active-btn' : ''}}">
                <a href="{{ route('contact.contact') }}">Contact</a>
            </li>
        </ul>
        <ul class="secondary-link row">
                <li>
                    <a href="https://www.facebook.com/vzwwiebebree/" class="social" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
            
        </ul>
    </nav>
</section>