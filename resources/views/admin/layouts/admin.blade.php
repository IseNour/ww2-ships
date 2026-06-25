<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        /* ============================================ */
        /* DARK MODE VARIABLES                          */
        /* ============================================ */
        :root {
            --bg-body: #f0f4f8;
            --bg-card: white;
            --bg-sidebar-start: #0e263a;
            --bg-sidebar-end: #1a3a5c;
            --text-primary: #1a3a5c;
            --text-secondary: #5e6b72;
            --border-color: rgba(26, 58, 92, 0.1);
            --shadow-color: rgba(26, 58, 92, 0.08);
            --stat-bg: white;
            --table-bg: white;
            --table-hover: rgba(26, 58, 92, 0.03);
            --alert-success-bg: rgba(26, 58, 92, 0.08);
            --alert-success-border: #1a3a5c;
            --alert-error-bg: rgba(204, 178, 80, 0.08);
            --alert-error-border: #ccb250;
            --nav-link-color: rgba(255, 255, 255, 0.7);
            --nav-link-hover: rgba(255, 255, 255, 0.1);
            --nav-link-active: linear-gradient(135deg, #ccb250 0%, #8a782e 100%);
            --brand-border: rgba(204, 178, 80, 0.3);
            --btn-shadow: rgba(26, 58, 92, 0.3);
            --badge-bg: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
            --card-header-bg: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%);
            --form-border: rgba(26, 58, 92, 0.1);
            --form-focus: #1a3a5c;
        }

        [data-bs-theme="dark"] {
            --bg-body: #0a1628;
            --bg-card: #1a2a3a;
            --bg-sidebar-start: #040d17;
            --bg-sidebar-end: #0a1628;
            --text-primary: #ccd6e0;
            --text-secondary: #8a9baa;
            --border-color: rgba(255, 255, 255, 0.08);
            --shadow-color: rgba(0, 0, 0, 0.3);
            --stat-bg: #1a2a3a;
            --table-bg: #1a2a3a;
            --table-hover: rgba(255, 255, 255, 0.03);
            --alert-success-bg: rgba(26, 58, 92, 0.2);
            --alert-success-border: #2e89a8;
            --alert-error-bg: rgba(204, 178, 80, 0.2);
            --alert-error-border: #ccb250;
            --nav-link-color: rgba(255, 255, 255, 0.6);
            --nav-link-hover: rgba(255, 255, 255, 0.05);
            --nav-link-active: linear-gradient(135deg, #ccb250 0%, #8a782e 100%);
            --brand-border: rgba(204, 178, 80, 0.2);
            --btn-shadow: rgba(0, 0, 0, 0.5);
            --badge-bg: linear-gradient(135deg, #2a4a6c 0%, #2e89a8 100%);
            --card-header-bg: linear-gradient(135deg, #2a4a6c 0%, #0a1628 100%);
            --form-border: rgba(255, 255, 255, 0.1);
            --form-focus: #2e89a8;
        }

        /* ============================================ */
        /* BODY & GENERAL                              */
        /* ============================================ */
        body {
            background: var(--bg-body);
            color: var(--text-primary);
            transition: background 0.3s ease, color 0.3s ease;
        }

        /* ============================================ */
        /* SIDEBAR                                      */
        /* ============================================ */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, var(--bg-sidebar-start) 0%, var(--bg-sidebar-end) 100%) !important;
            transition: background 0.3s ease;
        }
        .sidebar .nav-link {
            color: var(--nav-link-color);
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover {
            background: var(--nav-link-hover);
            color: white;
        }
        .sidebar .nav-link.active {
            background: var(--nav-link-active);
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
            border-bottom: 2px solid var(--brand-border);
        }
        .sidebar .brand i {
            color: #ccb250;
        }

        /* ============================================ */
        /* MAIN CONTENT                                */
        /* ============================================ */
        .main-content {
            background: var(--bg-body);
            min-height: 100vh;
            transition: background 0.3s ease;
        }

        /* ============================================ */
        /* STAT CARDS                                   */
        /* ============================================ */
        .stat-card {
            background: var(--stat-bg);
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 2px 10px var(--shadow-color);
            transition: all 0.3s ease;
            border-left: 4px solid #1a3a5c;
            color: var(--text-primary);
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px var(--shadow-color);
        }
        .stat-card .stat-number {
            font-size: 2rem;
            font-weight: 700;
            font-family: 'Cinzel', serif;
            color: var(--text-primary);
        }
        .stat-card .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* ============================================ */
        /* BUTTONS                                      */
        /* ============================================ */
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
            box-shadow: 0 8px 25px var(--btn-shadow);
            color: white;
        }
        .btn-naval-outline {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--text-primary);
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-naval-outline:hover {
            background: var(--text-primary);
            color: var(--bg-body);
        }

        /* ============================================ */
        /* TABLES                                       */
        /* ============================================ */
        .table-naval {
            background: var(--table-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px var(--shadow-color);
            color: var(--text-primary);
        }
        .table-naval thead {
            background: #1a3a5c;
            color: white;
        }
        .table-naval tbody tr:hover {
            background: var(--table-hover);
        }
        .table-naval td, .table-naval th {
            border-color: var(--border-color);
        }

        /* ============================================ */
        /* CARDS                                        */
        /* ============================================ */
        .card-naval {
            background: var(--bg-card);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 10px var(--shadow-color);
            color: var(--text-primary);
            transition: background 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
        .card-naval .card-header {
            background: var(--card-header-bg);
            color: white;
            border-radius: 16px 16px 0 0;
            padding: 16px 24px;
            font-family: 'Cinzel', serif;
            transition: background 0.3s ease;
        }

        /* ============================================ */
        /* FORMS                                        */
        /* ============================================ */
        .form-control, .form-select {
            border: 2px solid var(--form-border);
            border-radius: 10px;
            padding: 10px 16px;
            transition: all 0.3s ease;
            background: var(--bg-body);
            color: var(--text-primary);
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--form-focus);
            box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1);
        }
        .form-label {
            color: var(--text-primary);
            font-weight: 600;
        }

        /* ============================================ */
        /* BADGES                                       */
        /* ============================================ */
        .badge-naval {
            background: var(--badge-bg);
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
        }

        /* ============================================ */
        /* ALERTS                                        */
        /* ============================================ */
        .alert-success-custom {
            background: var(--alert-success-bg);
            border-left: 4px solid var(--alert-success-border);
            border-radius: 12px;
            color: var(--text-primary);
        }
        .alert-error-custom {
            background: var(--alert-error-bg);
            border-left: 4px solid var(--alert-error-border);
            border-radius: 12px;
            color: var(--text-primary);
        }

        /* ============================================ */
        /* DARK MODE TOGGLE BUTTON IN SIDEBAR           */
        /* ============================================ */
        .btn-dark-mode-sidebar {
            background: transparent;
            border: none;
            color: var(--nav-link-color);
            width: 100%;
            text-align: left;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-dark-mode-sidebar:hover {
            background: var(--nav-link-hover);
            color: white;
        }
        .btn-dark-mode-sidebar i {
            margin-right: 10px;
        }

        /* ============================================ */
        /* RESPONSIVE                                   */
        /* ============================================ */
        @media (max-width: 768px) {
            .sidebar {
                min-height: auto;
            }
        }

        /* ============================================ */
        /* PAGINATION                                   */
        /* ============================================ */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 6px;
            margin: 20px 0;
            flex-wrap: wrap;
            padding: 0;
        }
        .pagination .page-item {
            list-style: none;
        }
        .pagination .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            height: 38px;
            padding: 0 14px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-primary);
            background: var(--bg-card);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.25s ease;
            cursor: pointer;
        }
        .pagination .page-link:hover {
            background: #1a3a5c;
            color: white;
            border-color: #1a3a5c;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px var(--shadow-color);
        }
        .pagination .page-item.disabled .page-link {
            opacity: 0.4;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
            color: white;
            border-color: #1a3a5c;
            box-shadow: 0 4px 12px rgba(26, 58, 92, 0.25);
            font-weight: 600;
        }
        .pagination .page-item.active .page-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(26, 58, 92, 0.35);
        }
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            padding: 0 18px;
            font-weight: 600;
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
                    <li class="nav-item">
                        <button id="darkModeToggle" class="btn-dark-mode-sidebar">
                            <i class="bi bi-moon-fill" id="darkModeIcon"></i>
                            <span id="darkModeText">Dark Mode</span>
                        </button>
                    </li>
                    <li class="nav-item mt-2">
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
                    <div class="alert alert-success-custom alert-dismissible fade show border-0" style="background: var(--alert-success-bg); border-left: 4px solid var(--alert-success-border); border-radius: 12px; color: var(--text-primary);">
                        <i class="bi bi-check-circle"></i> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-error-custom alert-dismissible fade show border-0" style="background: var(--alert-error-bg); border-left: 4px solid var(--alert-error-border); border-radius: 12px; color: var(--text-primary);">
                        <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="alert alert-error-custom alert-dismissible fade show border-0" style="background: var(--alert-error-bg); border-left: 4px solid var(--alert-error-border); border-radius: 12px; color: var(--text-primary);">
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
    
    <!-- ============================================ -->
    <!-- DARK MODE SCRIPT FOR ADMIN                   -->
    <!-- ============================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get stored theme
            const storedTheme = localStorage.getItem('theme');
            const html = document.documentElement;
            
            // Apply stored theme
            if (storedTheme === 'dark') {
                html.setAttribute('data-bs-theme', 'dark');
            } else {
                html.setAttribute('data-bs-theme', 'light');
            }

            // Update admin toggle
            const toggleBtn = document.getElementById('darkModeToggle');
            if (toggleBtn) {
                updateAdminToggle();
                
                toggleBtn.addEventListener('click', function() {
                    const currentTheme = html.getAttribute('data-bs-theme');
                    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                    
                    html.setAttribute('data-bs-theme', newTheme);
                    localStorage.setItem('theme', newTheme);
                    updateAdminToggle();
                });
            }

            function updateAdminToggle() {
                const currentTheme = html.getAttribute('data-bs-theme');
                const icon = document.getElementById('darkModeIcon');
                const text = document.getElementById('darkModeText');
                
                if (currentTheme === 'dark') {
                    icon.className = 'bi bi-sun-fill';
                    text.textContent = 'Light Mode';
                } else {
                    icon.className = 'bi bi-moon-fill';
                    text.textContent = 'Dark Mode';
                }
            }
        });
    </script>
    @stack('scripts')
</body>
</html>