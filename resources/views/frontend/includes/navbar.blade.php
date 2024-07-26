<nav class="navbar navbar-expand-lg fixed-top nav-sticky sticky shadow" id="navbar" style="border-bottom: 3px dashed red;">
    <div class="container">
        <a class="navbar-brand logo" href="{{ route('home') }}">
            <span class="logo-light-mode">
{{--                <img src="{{ asset('/') }}assets/frontend/images/logo.jpg" alt="" height="50">--}}
                <span class="fw-bold text-dark"><font class="text-danger">E</font>ASE <font class="text-danger" style="font-family: "Roboto", "Helvetica Neue", "Helvetica", "Arial"">s</font>HABA</span>
            </span>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto navbar-center " id="mySidenav">
                <li class="nav-item ">
                    <a class="nav-link text-dark fw-bold font-16 {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home')  }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold font-16 {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about')  }}">About</a>
                    <ul>
                        <li><a class="nav-link text-dark fw-bold font-16 {{ Route::is('leadership-team') ? 'active' : '' }}" href="{{ route('leadership-team')  }}">Leadership Team</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold font-16 {{ Route::is('service') ? 'active' : '' }}" href="{{ route('service')  }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold font-16 {{ Route::is('gallery') ? 'active' : '' }}" href="{{ route('gallery')  }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold font-16 {{ Route::is('contract') ? 'active' : '' }}" href="{{ route('contract')  }}">Contract</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold font-16 {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard')  }}">Account</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a  class="nav-link text-dark fw-bold font-16 {{ Route::is('login') ? 'active' : '' }}" href="{{ route('login')  }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold font-16 {{ Route::is('register') ? 'active' : '' }}" href="{{ route('register')  }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
