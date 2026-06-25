@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<div class="text-center mb-5">
    <h1 class="text-4xl md:text-6xl font-bold font-cinzel" style="background: linear-gradient(135deg, #ccb250 0%, #f2eacb 50%, #ccb250 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
        ⚓ Encyclopedia of Warships
    </h1>
    <p class="text-xl text-navy-600 mt-3 font-light tracking-wide" style="color: #1a3a5c;">
        The Ultimate World War II Naval Vessel Database
    </p>
    <div class="flex flex-wrap justify-center gap-3 mt-4">
        <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-4 py-2 rounded-full text-sm font-medium">
            <i class="bi bi-ship"></i> {{ $totalShips }} Ships
        </span>
        <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-4 py-2 rounded-full text-sm font-medium">
            <i class="bi bi-airplane"></i> {{ $carriers }} Carriers
        </span>
        <span class="bg-gradient-to-r from-brass-500 to-brass-600 text-white px-4 py-2 rounded-full text-sm font-medium">
            <i class="bi bi-trophy"></i> {{ $totalBattles }} Battles
        </span>
        <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-4 py-2 rounded-full text-sm font-medium">
            <i class="bi bi-flag"></i> {{ $totalCountries }} Countries
        </span>
    </div>
    <div class="h-0.5 w-4/5 mx-auto my-5 rounded-full" style="background: linear-gradient(90deg, transparent, #1a3a5c, #2e89a8, #1a3a5c, transparent);"></div>
</div>

<!-- Slideshow Section -->
<div class="row mb-5">
    <div class="col-md-12">
        <div id="featuredShipsCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach($featuredShips as $index => $ship)
                    <button type="button" data-bs-target="#featuredShipsCarousel" 
                            data-bs-slide-to="{{ $index }}" 
                            class="{{ $index === 0 ? 'active' : '' }}"
                            aria-label="Slide {{ $index + 1 }}">
                    </button>
                @endforeach
            </div>
            
            <!-- Slides -->
            <div class="carousel-inner rounded-3 shadow-lg">
                @foreach($featuredShips as $index => $ship)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" 
                         style="height: 500px; background: #1a1a2e;">
                        <div class="position-relative h-100">
                            <!-- Background Image -->
                            @if($ship->images->isNotEmpty())
                                <img src="{{ $ship->images->first()->image_url }}" 
                                     class="d-block w-100 h-100 object-fit-cover opacity-75" 
                                     alt="{{ $ship->name }}"
                                     style="object-fit: cover;">
                            @else
                                <div class="d-flex justify-content-center align-items-center h-100 bg-dark">
                                    <i class="bi bi-ship display-1 text-secondary"></i>
                                </div>
                            @endif
                            
                            <!-- Overlay Content -->
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" 
                                 style="background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 100%);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 text-white">
                                            <h1 class="display-4 fw-bold mb-3" style="font-family: 'Cinzel', serif;">{{ $ship->name }}</h1>
                                            <div class="d-flex gap-3 mb-3 flex-wrap">
                                                <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-3 py-2 rounded-full text-sm font-medium">
                                                    <i class="bi bi-tag"></i> {{ $ship->class->name }}
                                                </span>
                                                <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-3 py-2 rounded-full text-sm font-medium">
                                                    <i class="bi bi-flag"></i> {{ $ship->class->country->name }}
                                                </span>
                                                @if($ship->is_aircraft_carrier)
                                                    <span class="bg-gradient-to-r from-brass-500 to-brass-600 text-white px-3 py-2 rounded-full text-sm font-medium">
                                                        <i class="bi bi-airplane"></i> Aircraft Carrier
                                                    </span>
                                                @endif
                                                <span class="bg-gradient-to-r from-navy-500 to-ocean-500 text-white px-3 py-2 rounded-full text-sm font-medium">
                                                    <i class="bi bi-calendar"></i> {{ $ship->launch_date?->format('Y') ?? 'N/A' }}
                                                </span>
                                            </div>
                                            <p class="lead mb-4">{{ Str::limit($ship->description, 200) }}</p>
                                            <!-- More visible button -->
                                            <a href="{{ route('ships.show', ['id' => $ship->id]) }}" 
                                               class="btn btn-light btn-lg px-5 py-3 fw-bold" 
                                               style="background: rgba(255,255,255,0.95); color: #1a3a5c; border: none; border-radius: 12px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                                <i class="bi bi-eye"></i> View Ship Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredShipsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredShipsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- General Description Section -->
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-body p-5">
                <h2 class="text-center mb-4" style="font-family: 'Cinzel', serif; color: #1a3a5c;">⚓ Warships of World War II</h2>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p class="lead text-center" style="color: #1a3a5c;">
                            World War II saw the most extensive use of naval power in history. 
                            From the mighty battleships to the versatile aircraft carriers, 
                            these warships shaped the course of the war and changed naval warfare forever.
                        </p>
                    </div>
                </div>
                
                <div class="row mt-4 g-4">
                    <div class="col-md-3 text-center">
                        <div class="p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05);">
                            <i class="bi bi-ship display-4" style="color: #1a3a5c;"></i>
                            <h5 class="mt-2" style="color: #1a3a5c; font-weight: 600;">Battleships</h5>
                            <p class="text-muted small">The ultimate symbol of naval power</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 rounded-3" style="background: rgba(46, 137, 168, 0.05);">
                            <i class="bi bi-airplane display-4" style="color: #2e89a8;"></i>
                            <h5 class="mt-2" style="color: #1a3a5c; font-weight: 600;">Aircraft Carriers</h5>
                            <p class="text-muted small">The new queens of the sea</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 rounded-3" style="background: rgba(118, 130, 136, 0.05);">
                            <i class="bi bi-water display-4" style="color: #5e6b72;"></i>
                            <h5 class="mt-2" style="color: #1a3a5c; font-weight: 600;">Submarines</h5>
                            <p class="text-muted small">Silent hunters of the deep</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="p-3 rounded-3" style="background: rgba(204, 178, 80, 0.05);">
                            <i class="bi bi-trophy display-4" style="color: #ccb250;"></i>
                            <h5 class="mt-2" style="color: #1a3a5c; font-weight: 600;">Historic Battles</h5>
                            <p class="text-muted small">Turning points at sea</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-10 mx-auto">
                        <p class="text-center text-muted">
                            The naval battles of World War II involved thousands of ships, millions of sailors, 
                            and determined the fate of nations. From the Atlantic to the Pacific, 
                            these vessels fought with courage and sacrifice, leaving an enduring legacy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="row mb-5 g-3">
    <div class="col-md-3">
        <div class="card text-center text-white shadow-sm border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); border-radius: 16px;">
            <div class="card-body p-4">
                <h1 class="display-4 fw-bold" style="background: linear-gradient(135deg, #ccb250, #f2eacb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-family: 'Cinzel', serif;">{{ $totalShips }}</h1>
                <p class="lead" style="font-size: 1rem; font-weight: 400; opacity: 0.9; letter-spacing: 1px;">Total Ships</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center text-white shadow-sm border-0" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); border-radius: 16px;">
            <div class="card-body p-4">
                <h1 class="display-4 fw-bold" style="background: linear-gradient(135deg, #ccb250, #f2eacb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-family: 'Cinzel', serif;">{{ $carriers }}</h1>
                <p class="lead" style="font-size: 1rem; font-weight: 400; opacity: 0.9; letter-spacing: 1px;">Aircraft Carriers</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center text-white shadow-sm border-0" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); border-radius: 16px;">
            <div class="card-body p-4">
                <h1 class="display-4 fw-bold" style="background: linear-gradient(135deg, #f2eacb, #ccb250); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-family: 'Cinzel', serif;">{{ $totalBattles }}</h1>
                <p class="lead" style="font-size: 1rem; font-weight: 400; opacity: 0.9; letter-spacing: 1px;">Battles</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center text-white shadow-sm border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); border-radius: 16px;">
            <div class="card-body p-4">
                <h1 class="display-4 fw-bold" style="background: linear-gradient(135deg, #ccb250, #f2eacb); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-family: 'Cinzel', serif;">{{ $totalCountries }}</h1>
                <p class="lead" style="font-size: 1rem; font-weight: 400; opacity: 0.9; letter-spacing: 1px;">Countries</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Battles Section -->
<div class="row mb-4">
    <div class="col-md-12">
        <h3 class="mb-3" style="font-family: 'Cinzel', serif; color: #1a3a5c;">📜 Recent Battles</h3>
        <div class="row">
            @foreach($recentBattles as $battle)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm h-100 border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 12px; transition: all 0.3s ease;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #1a3a5c; font-weight: 600;">{{ $battle->name }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="bi bi-calendar" style="color: #1a3a5c;"></i> {{ $battle->battle_date->format('F d, Y') }}<br>
                                    <i class="bi bi-geo-alt" style="color: #1a3a5c;"></i> {{ $battle->battle_site }}
                                </small>
                            </p>
                            <p class="card-text">{{ Str::limit($battle->description, 80) }}</p>
                            <a href="{{ route('battles.show', $battle) }}" class="btn btn-sm" style="background: #1a3a5c; color: white; border-radius: 8px; transition: all 0.3s ease;">
                                View Battle
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row mt-4 mb-5">
    <div class="col-md-12 text-center">
        <a href="{{ route('ships.index') }}" class="btn btn-lg me-3" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; padding: 12px 30px; border-radius: 12px; font-weight: 600; transition: all 0.3s ease;">
            <i class="bi bi-ship"></i> Browse All Ships
        </a>
        <a href="{{ route('battles.index') }}" class="btn btn-lg" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; border: none; padding: 12px 30px; border-radius: 12px; font-weight: 600; transition: all 0.3s ease;">
            <i class="bi bi-trophy"></i> View All Battles
        </a>
    </div>
</div>

<style>
    .btn-lg:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
    }
    
    .btn-outline-naval {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-outline-naval:hover {
        background: #1a3a5c;
        color: white;
        transform: translateY(-2px);
    }
    
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 40px rgba(26, 58, 92, 0.15) !important;
    }
    
    /* Button hover effect */
    .btn-light:hover {
        background: white !important;
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 8px 30px rgba(0,0,0,0.3) !important;
    }
</style>
@endsection