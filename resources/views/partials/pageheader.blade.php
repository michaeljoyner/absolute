<header class="header-top">
    <span class="menu-toggle" id="menu_burger"><img class="burger-icon" src="{{ asset('images/app_menu_icon.png') }}" alt="toggle menu" width="30px" height="30px"/></span>
    <a href="/"><img src="{{ asset('images/logo_with_white_bg.png') }}" id="logo_image" alt="logo" width="180px" heigth="180px"></a>
    <nav class="menu-nav">
        <ul>
            @if(Request::path() == "/" || Request::path() == "home")
                <li class="current-page">
            @else
            <a href="/"><li>
            @endif
                <div class="nav-word-item">Home</div>
                <div class="nav-icon-item" id="home-nav-icon"><img src="{{ asset('images/home_icon2.png') }}" alt="home" class="nav-icon"></div>
            </li>
            @if(Request::path() != "/" && Request::path() != "home")
            </a>
            @endif
            @if(Request::path() == "about")
            <li class="current-page">
            @else
            <a href="/about"><li>
            @endif
                <div class="nav-word-item">About</div>
                <div class="nav-icon-item"><img src="{{ asset('images/about_icon2.png') }}" alt="about" class="nav-icon"></div>
            </li>
            @if(Request::path() != "about")
            </a>
            @endif
            @if(Request::path() == "delivery")
            <li class="current-page">
            @else
            <a href="/delivery"><li>
            @endif
                <div class="nav-word-item">Delivery</div>
                <div class="nav-icon-item"><img src="{{ asset('images/delivery_icon2.png') }}" alt="delivery" class="nav-icon"></div>
            </li>
            @if(Request::path() != "delivery")
            </a>
            @endif
            @if(Request::path() == "contact")
            <li class="current-page">
            @else
            <a href="/contact"><li>
            @endif
                <div class="nav-word-item">Contact</div>
                <div class="nav-icon-item"><img src="{{ asset('images/contact_icon2.png') }}" alt="contact" class="nav-icon"></div>
            </li>
            @if(Request::path() != "contact")
            </a>
            @endif
        </ul>
    </nav>
    <hr class="fatty"/>
    <hr class="skinny"/>
</header>