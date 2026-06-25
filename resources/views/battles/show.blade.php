@extends('layouts.app')

@section('title', $battle->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <!-- Battle Header with Image -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden;">
            @if($battle->image_url)
                <div style="height: 300px; overflow: hidden;">
                    <img src="{{ $battle->image_url }}" class="w-100 h-100" alt="{{ $battle->name }}" style="object-fit: cover;">
                </div>
            @endif
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c; font-size: 2.5rem;">🏆 {{ $battle->name }}</h1>
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                                <i class="bi bi-calendar"></i> {{ $battle->battle_date->format('F d, Y') }}
                            </span>
                            <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                                <i class="bi bi-geo-alt"></i> {{ $battle->battle_site }}
                            </span>
                            <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                                <i class="bi bi-ship"></i> {{ $battle->ships->count() }} Ships
                            </span>
                        </div>
                    </div>
                    <a href="{{ route('battles.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 8px 20px; transition: all 0.3s ease;">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                </div>
            </div>
        </div>

        <!-- Description -->
        @if($battle->description)
            <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
                <div class="card-body p-4">
                    <p class="lead" style="color: #1a3a5c;">{{ $battle->description }}</p>
                </div>
            </div>
        @endif

        <!-- Participating Ships -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-ship"></i> Participating Ships ({{ $battle->ships->count() }})</h5>
            </div>
            <div class="card-body p-4">
                @if($battle->ships->count() > 0)
                    <div class="row">
                        @foreach($battle->ships as $ship)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05); border-left: 4px solid {{ $ship->pivot->result === 'Victory' ? '#2e89a8' : ($ship->pivot->result === 'Sunk' ? '#ccb250' : '#1a3a5c') }};">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: #1a3a5c; font-weight: 600;">
                                            <a href="{{ route('ships.show', $ship) }}" style="color: #1a3a5c; text-decoration: none;">
                                                {{ $ship->name }}
                                            </a>
                                        </h6>
                                        <small class="text-muted" style="color: #5e6b72 !important;">
                                            {{ $ship->class->name }} • {{ $ship->class->country->name }}
                                        </small>
                                    </div>
                                    <span class="badge ms-2" style="background: {{ $ship->pivot->result === 'Victory' ? 'linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%)' : ($ship->pivot->result === 'Sunk' ? 'linear-gradient(135deg, #ccb250 0%, #8a782e 100%)' : 'linear-gradient(135deg, #5e6b72 0%, #303a42 100%)') }}; color: white; padding: 6px 14px; border-radius: 12px;">
                                        {{ $ship->pivot->result }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center py-3" style="color: #5e6b72 !important;">No ships recorded for this battle.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Sidebar -->
    <div class="col-md-4">
        <!-- Battle Quick Stats -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-speedometer2"></i> Quick Stats</h6>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Battle Date</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $battle->battle_date->format('F d, Y') }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Location</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $battle->battle_site }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Total Ships</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">{{ $battle->ships->count() }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2">
                    <span style="color: #1a3a5c;">Victories</span>
                    <span style="color: #2e89a8; font-weight: 500; font-family: 'Cinzel', serif;">
                        {{ $battle->ships->filter(function($ship) { return $ship->pivot->result === 'Victory'; })->count() }}
                    </span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2">
                    <span style="color: #1a3a5c;">Sunk/Destroyed</span>
                    <span style="color: #ccb250; font-weight: 500; font-family: 'Cinzel', serif;">
                        {{ $battle->ships->filter(function($ship) { return $ship->pivot->result === 'Sunk'; })->count() }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-gear"></i> Actions</h6>
            </div>
            <div class="card-body p-3">
                @auth
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.battles.edit', $battle) }}" class="btn w-100 mb-2" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                            <i class="bi bi-pencil"></i> Edit Battle
                        </a>
                        <form action="{{ route('admin.battles.destroy', $battle) }}" method="POST" class="w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn w-100" style="background: linear-gradient(135deg, #8a782e 0%, #ccb250 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;" onclick="return confirm('Are you sure you want to delete {{ $battle->name }}?')">
                                <i class="bi bi-trash"></i> Delete Battle
                            </button>
                        </form>
                    @endif
                @endauth
                <a href="{{ route('battles.index') }}" class="btn w-100" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                    <i class="bi bi-arrow-left"></i> Back to Battles
                </a>
            </div>
        </div>

        <!-- Timeline -->
        <div class="card shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-clock-history"></i> Battle Timeline</h6>
            </div>
            <div class="card-body p-4">
                <div class="text-center">
                    <div style="color: #1a3a5c; font-size: 3rem; font-family: 'Cinzel', serif; font-weight: 700;">
                        {{ $battle->battle_date->format('Y') }}
                    </div>
                    <div style="color: #5e6b72; font-size: 1rem;">
                        {{ $battle->battle_date->format('F d') }}
                    </div>
                    <div class="naval-divider my-3"></div>
                    <div style="color: #1a3a5c; font-weight: 600;">
                        {{ $battle->battle_site }}
                    </div>
                    <div style="color: #5e6b72; font-size: 0.9rem; margin-top: 4px;">
                        <i class="bi bi-ship"></i> {{ $battle->ships->count() }} ships involved
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
    }
    
    .card {
        transition: all 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-2px);
    }
    
    .naval-divider {
        height: 2px;
        width: 60%;
        margin: 10px auto;
        background: linear-gradient(90deg, transparent, #1a3a5c, #2e89a8, #1a3a5c, transparent);
        border-radius: 100px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem !important;
        }
    }
</style>
@endsection