<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>
    <nav>
        <div class="navbar">
            <ul class="navbar">
                <li>
                    <a href="{{ route('homepage')}}">Home</a>
                </li>
                <li>
                    <a href="{{ route('build')}}">Pre-build</a>
                </li>
                <li>
                    <a href="{{ route('builder')}}">Custom build</a>
                </li>
                <li>
                    <a href="{{ route('drops')}}">Pc drops</a>
                </li>
                <li>
                    <a href="{{ route('help')}}">Help</a>
                </li>
            </ul>
            @if(Auth::check())
                <div class="dropdown">
                    <a id="profile-button" href="#">
                        <img src="{{ asset('images/profile-round-1342-svgrepo-com.svg') }}" alt="logo" width="100px" height="auto">
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('profile') }}">Profile</a>
                        <a href="#">Orders</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <a id="profile-button" href="{{ route('login') }}">
                    <img src="{{ asset('images/profile-round-1342-svgrepo-com.svg') }}" alt="logo" width="100px" height="auto">
                </a>
            @endif
        </div>
    </nav>
</body>
</html>
