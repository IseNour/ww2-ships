<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #0e263a 0%, #1a3a5c 100%);
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        .sidebar .nav-link.active {
            background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%);
            color: white;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar .brand {
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            padding: 20px;
            color: white;
            border-bottom: 2px solid rgba(204, 178, 80, 0.3);
        }
        .sidebar .brand i {
            color: #ccb250;
        }
        .main-content {
            background: #f0f4f8;
            min-height: 100vh;
        }
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-left: 4px solid #1a3a5c;
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(26, 58, 92, 0.12);
        }
        .stat-card .stat-number {
            font-size: 2rem;
            font-weight: 700;
            font-family: 'Cinzel', serif;
            color: #1a3a5c;
        }
        .stat-card .stat-label {
            color: #5e6b72;
            font-size: 0.9rem;
        }
        .btn-naval {
            background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-naval:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
            color: white;
        }
        .btn-naval-outline {
            background: transparent;
            color: #1a3a5c;
            border: 2px solid #1a3a5c;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-naval-outline:hover {
            background: #1a3a5c;
            color: white;
        }
        .table-naval {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .table-naval thead {
            background: #1a3a5c;
            color: white;
        }
        .table-naval tbody tr:hover {
            background: rgba(26, 58, 92, 0.03);
        }
        .card-naval {
            background: white;
            border-radius: 16px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .card-naval .card-header {
            background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%);
            color: white;
            border-radius: 16px 16px 0 0;
            padding: 16px 24px;
            font-family: 'Cinzel', serif;
        }
        .form-control, .form-select {
            border: 2px solid rgba(26, 58, 92, 0.1);
            border-radius: 10px;
            padding: 10px 16px;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #1a3a5c;
            box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1);
        }
        .form-label {
            color: #1a3a5c;
            font-weight: 600;
        }
        .badge-naval {
            background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
        }
        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0 sidebar">
                <div class="brand">
                    <i class="bi bi-shield-lock"></i> Admin
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                           href="{{ route('admin.dashboard') }}">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.ships.*') ? 'active' : '' }}" 
                           href="{{ route('admin.ships.index') }}">
                            <i class="bi bi-compass"></i> Ships
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.battles.*') ? 'active' : '' }}" 
                           href="{{ route('admin.battles.index') }}">
                            <i class="bi bi-trophy"></i> Battles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.countries.*') ? 'active' : '' }}" 
                           href="{{ route('admin.countries.index') }}">
                            <i class="bi bi-flag"></i> Countries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.classes.*') ? 'active' : '' }}" 
                           href="{{ route('admin.classes.index') }}">
                            <i class="bi bi-tags"></i> Ship Classes
                        </a>
                    </li>
                    <li class="nav-item mt-5">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link text-danger" style="background:none; border:none; width:100%; text-align:left;">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-10 p-4 main-content">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show border-0" style="background: rgba(26, 58, 92, 0.08); border-left: 4px solid #1a3a5c; border-radius: 12px;">
                        <i class="bi bi-check-circle"></i> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show border-0" style="background: rgba(204, 178, 80, 0.08); border-left: 4px solid #ccb250; border-radius: 12px;">
                        <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-0" style="background: rgba(204, 178, 80, 0.08); border-left: 4px solid #ccb250; border-radius: 12px;">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>