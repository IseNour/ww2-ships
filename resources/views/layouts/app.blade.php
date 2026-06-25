<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'WW2 Ships Database')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        .navbar-brand { font-weight: bold; }
        .ship-card { transition: transform 0.2s; }
        .ship-card:hover { transform: translateY(-5px); }
        .carrier-badge {
            background-color: #0d6efd;
            color: white;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #f8f9fa;
        }
        .thumbnail {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        /* Carousel Styles */
        .carousel-item {
            transition: transform 0.6s ease-in-out;
        }
        .carousel-indicators button {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50% !important;
            margin: 0 6px !important;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.5);
            border-radius: 50%;
            padding: 25px;
            background-size: 50%;
        }
        @media (max-width: 768px) {
            .carousel-item {
                height: 350px !important;
            }
            .carousel-item h1 {
                font-size: 1.8rem !important;
            }
            .carousel-item .lead {
                font-size: 1rem !important;
            }
            /* Hero Title Styles */
.display-1 {
    font-size: 4.5rem;
    font-weight: 800;
    letter-spacing: -2px;
}

.display-1 .text-primary {
    background: linear-gradient(45deg, #0d6efd, #0dcaf0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

@media (max-width: 768px) {
    .display-1 {
        font-size: 2.5rem !important;
    }
    .display-1 .lead {
        font-size: 1.2rem !important;
    }
}
        }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <main class="py-4">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
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

    <footer>
        <div class="container text-center">
            <p class="text-muted">WW2 Ships Nour &copy; {{ date('Y') }}</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>