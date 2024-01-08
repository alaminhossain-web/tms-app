<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home')}}">
                    <img src="{{ asset('/') }}front/assets/img/logo/logo.png" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="nav-category">
                    <div class="dropdown">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-grip-vertical"></i> Category
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Software Development</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">Graphics Design</a></li>
                            <li><a class="dropdown-item" href="#">Motion Graphics</a></li>
                            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="#">Video Edition</a></li>
                            <li><a class="dropdown-item" href="#">Logo Design</a></li>
                            <li><a class="dropdown-item" href="#">English Learning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home')}}">Home</a>
                            
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="{{ route('category-products')}}">Courses Parent Category</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="blog.html">Blog Category</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-nav-search">
                            <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#"><i class="far fa-shopping-cart"></i> <span>2</span> </a>
                        </div>
                        <div class="header-btn-area">
                            @if (auth()->check())
                            <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" class="header-btn ms-3 bg-danger">Logout</a>
                            <form action="{{ route('logout')}}" method="post" id="logoutForm">
                                @csrf
                            </form>
                            @else 
                            <a href="{{route('login')}}" class="header-btn ms-3 bg-primary">Sign In</a>
                            <a href="{{route('register')}}" class="header-btn">Register</a>
                            @endif  
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>