<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'WW2 Ships Database')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        /* ============================================ */
        /* DARK MODE VARIABLES                          */
        /* ============================================ */
        :root {
            --bg-body: #f0f4f8;
            --bg-card: rgba(255, 255, 255, 0.95);
            --text-primary: #1a3a5c;
            --text-secondary: #5e6b72;
            --border-color: rgba(26, 58, 92, 0.1);
            --shadow-color: rgba(26, 58, 92, 0.08);
            --bg-light: #f0f4f8;
            --bg-dark: #dce4ed;
            --card-bg: white;
            --text-muted: #5e6b72;
        }
:root {
    --btn-text: #1a3a5c;  /* Dark blue for light mode */
}

[data-bs-theme="dark"] {
    --btn-text: #1a3a5c;  /* Dark blue for dark mode */
}
        [data-bs-theme="dark"] {
            --bg-body: #0a1628;
            --bg-card: rgba(20, 40, 70, 0.95);
            --text-primary: #ccd6e0;
            --text-secondary: #8a9baa;
            --border-color: rgba(255, 255, 255, 0.08);
            --shadow-color: rgba(0, 0, 0, 0.3);
            --bg-light: #1a2a3a;
            --bg-dark: #0a1628;
            --card-bg: #1a2a3a;
            --text-muted: #8a9baa;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-body);
            min-height: 100vh;
            color: var(--text-primary);
            transition: background 0.3s ease, color 0.3s ease;
        }

        /* Dark mode card styles */
        .card {
            background: var(--card-bg) !important;
            color: var(--text-primary) !important;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .card .card-header {
            background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%);
            color: white;
        }

        [data-bs-theme="dark"] .card .card-header {
            background: linear-gradient(135deg, #2a4a6c 0%, #1a2a3a 100%);
        }

        /* Dark mode text */
        .text-muted {
            color: var(--text-muted) !important;
        }

        .text-primary {
            color: var(--text-primary) !important;
        }

        /* Dark mode navbar */
        .navbar {
            background: linear-gradient(135deg, #0e263a 0%, #1a3a5c 50%, #0e263a 100%) !important;
            border-bottom: 3px solid #ccb250;
        }

        [data-bs-theme="dark"] .navbar {
            background: linear-gradient(135deg, #061220 0%, #0e263a 50%, #061220 100%) !important;
        }

        /* Dark mode footer */
        .footer-naval {
            background: linear-gradient(135deg, #0e263a, #1a3a5c);
            color: rgba(255, 255, 255, 0.7);
        }

        [data-bs-theme="dark"] .footer-naval {
            background: linear-gradient(135deg, #061220, #0e263a);
        }

        /* Dark mode filter section */
        .filter-section {
            background: var(--bg-card);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
        }

        .filter-section .form-control,
        .filter-section .form-select {
            background: var(--bg-body);
            color: var(--text-primary);
            border: 2px solid var(--border-color);
        }

        .filter-section .form-control:focus,
        .filter-section .form-select:focus {
            border-color: #1a3a5c;
            box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1);
        }

        /* Dark mode toggle button */
        .btn-dark-mode {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 4px 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-dark-mode:hover {
            transform: rotate(20deg);
            color: #ccb250;
        }

        /* Dark mode ship cards */
        .ship-card {
            background: var(--card-bg) !important;
            color: var(--text-primary) !important;
            border: 1px solid var(--border-color) !important;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .ship-card:hover {
            box-shadow: 0 12px 48px var(--shadow-color) !important;
        }

        /* Dark mode badges */
        .badge {
            transition: background 0.3s ease;
        }

        /* Dark mode table */
        .table {
            color: var(--text-primary);
        }

        .table td, .table th {
            border-color: var(--border-color);
        }

        .table-hover tbody tr:hover {
            background: rgba(26, 58, 92, 0.03);
        }

        [data-bs-theme="dark"] .table-hover tbody tr:hover {
            background: rgba(255, 255, 255, 0.03);
        }

        /* Dark mode alert */
        .alert {
            background: var(--bg-card);
            color: var(--text-primary);
            border: 1px solid var(--border-color);
        }

        /* Dark mode pagination */
        .pagination .page-link {
            background: var(--card-bg);
            color: var(--text-primary);
            border-color: var(--border-color);
        }

        .pagination .page-link:hover {
            background: #1a3a5c;
            color: white;
        }

        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
            color: white;
        }

        /* Dark mode hero title */
        .text-gold-gradient {
            background: linear-gradient(135deg, #ccb250 0%, #f2eacb 50%, #ccb250 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        [data-bs-theme="dark"] .text-gold-gradient {
            background: linear-gradient(135deg, #e8d570 0%, #f2eacb 50%, #e8d570 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .btn-dark-mode span {
                display: none;
            }
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <main class="py-4">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show border-0" style="background: rgba(26, 58, 92, 0.08); border-left: 4px solid #1a3a5c; border-radius: 12px;">
                    {{ session('success') }}
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
    </main>

    <footer class="footer-naval">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <p class="mb-0">
                    <i class="bi bi-anchor" style="color: #ccb250;"></i> 
                    <span style="color: rgba(255,255,255,0.9); font-weight: 500;">WW2 Ships Nour</span>
                    <span style="color: rgba(255,255,255,0.3); margin: 0 12px;">|</span>
                    <span style="color: rgba(255,255,255,0.5); font-size: 0.9rem;">&copy; {{ date('Y') }}</span>
                    <span style="color: rgba(255,255,255,0.2); margin: 0 16px;">•</span>
                    <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Home</a>
                    <span style="color: rgba(255,255,255,0.3); margin: 0 8px;">•</span>
                    <a href="{{ route('ships.index') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Ships</a>
                    <span style="color: rgba(255,255,255,0.3); margin: 0 8px;">•</span>
                    <a href="{{ route('battles.index') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Battles</a>
                    <span style="color: rgba(255,255,255,0.3); margin: 0 8px;">•</span>
                    <a href="{{ route('countries.index') }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: all 0.3s ease;">Countries</a>
                </p>
                <p class="text-muted small mt-2" style="opacity: 0.6; color: rgba(255,255,255,0.4) !important;">
                    <i class="bi bi-compass" style="color: #ccb250;"></i> Navigating the history of naval warfare
                </p>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ============================================ -->
    <!-- DARK MODE SCRIPT                             -->
    <!-- ============================================ -->
    <script>
        // Dark Mode Toggle
        document.addEventListener('DOMContentLoaded', function() {
            // Get the theme from localStorage
            const storedTheme = localStorage.getItem('theme');
            const html = document.documentElement;
            
            // Apply stored theme
            if (storedTheme === 'dark') {
                html.setAttribute('data-bs-theme', 'dark');
            } else {
                html.setAttribute('data-bs-theme', 'light');
            }

            // Get the toggle button
            const toggleBtn = document.getElementById('darkModeToggle');
            
            if (toggleBtn) {
                // Update icon based on current theme
                updateToggleIcon(toggleBtn);
                
                // Add click event
                toggleBtn.addEventListener('click', function() {
                    const currentTheme = html.getAttribute('data-bs-theme');
                    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                    
                    html.setAttribute('data-bs-theme', newTheme);
                    localStorage.setItem('theme', newTheme);
                    updateToggleIcon(this);
                });
            }

            function updateToggleIcon(btn) {
                const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                const icon = btn.querySelector('i');
                const text = btn.querySelector('span');
                
                if (currentTheme === 'dark') {
                    icon.className = 'bi bi-sun-fill';
                    if (text) text.textContent = 'Light';
                } else {
                    icon.className = 'bi bi-moon-fill';
                    if (text) text.textContent = 'Dark';
                }
            }
        });
    </script>
</body>
</html>