<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section">
    <div class="logo">
        @foreach ($logo as $item)
            <img src="{{asset("storage/".$item->photo)}}" height="40px" alt="">
        @endforeach
        {{-- <img src="img/logo.png" alt=""><!-- Logo --> --}}
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class=""><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('service')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            {{-- <li><a href="elements.html">Elements</a></li> --}}
            @if(Auth::check() && Auth::user()->role_id ==1)
            {{-- <li class="nav-item px-lg-4"><a
                    href="{{route('admin.index')}}">ADMIN</a></li> --}}
            @else
            @endif

            @guest
            <li class="nav-item px-lg-4"><a
                    href="{{ route('login') }}">{{ ('Login') }}</a></li>
            @if (Route::has('register'))
            <li class="nav-item px-lg-4"><a
                    href="{{ route('register') }}">{{ ('Register') }}</a></li>
            @endif
            @else
            <li class="nav-item px-lg-4">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @endguest
        </ul>
    </nav>
</header>
<!-- Header section end -->