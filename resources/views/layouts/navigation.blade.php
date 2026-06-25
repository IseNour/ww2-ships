<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="bi bi-anchor"></i> WW2 Ships
        </a>
        
        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                       href="{{ route('home') }}">
                        <i class="bi bi-house"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ships.*') ? 'active' : '' }}" 
                       href="{{ route('ships.index') }}">
                        <i class="bi bi-compass"></i> Ships
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('battles.*') ? 'active' : '' }}" 
                       href="{{ route('battles.index') }}">
                        <i class="bi bi-trophy"></i> Battles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('countries.*') ? 'active' : '' }}" 
                       href="{{ route('countries.index') }}">
                        <i class="bi bi-flag"></i> Countries
                    </a>
                </li>
                @auth
                    @if(Auth::user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.*') ? 'active' : '' }}" 
                               href="{{ route('admin.dashboard') }}">
                                <i class="bi bi-shield-lock"></i> Admin
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
            
            <!-- Right side - User dropdown -->
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            @if(Auth::user()->isAdmin())
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        <i class="bi bi-speedometer2"></i> Admin Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.ships.index') }}">
                                        <i class="bi bi-compass"></i> Manage Ships
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.battles.index') }}">
                                        <i class="bi bi-trophy"></i> Manage Battles
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.countries.index') }}">
                                        <i class="bi bi-flag"></i> Manage Countries
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right"></i> Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>