@extends('layouts.app')

@section('title', $ship->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <!-- Ship Header -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c; font-size: 2.5rem;">⚓ {{ $ship->name }}</h1>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-tag"></i> {{ $ship->class->name }}
                    </span>
                    <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-flag"></i> {{ $ship->class->country->name }}
                    </span>
                    @if($ship->is_aircraft_carrier)
                        <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-airplane"></i> Aircraft Carrier
                        </span>
                    @endif
                    @if($ship->launch_date)
                        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-calendar"></i> Launched {{ $ship->launch_date->format('Y') }}
                        </span>
                    @endif
                </div>
            </div>
            <a href="{{ route('ships.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 8px 20px; transition: all 0.3s ease;">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

        <!-- Description -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-body p-4">
                <p class="lead" style="color: #1a3a5c;">{{ $ship->description }}</p>
                @if($ship->fate)
                    <p class="mb-0"><strong style="color: #1a3a5c;">Fate:</strong> <span style="color: #5e6b72;">{{ $ship->fate }}</span></p>
                @endif
            </div>
        </div>

        <!-- Specifications -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-list-ul"></i> Specifications</h5>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600; width: 40%;">Class</td>
                                    <td style="color: #5e6b72;">{{ $ship->class->name }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Country</td>
                                    <td style="color: #5e6b72;">{{ $ship->class->country->name }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Launch Date</td>
                                    <td style="color: #5e6b72;">{{ $ship->launch_date?->format('F d, Y') ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Commission Date</td>
                                    <td style="color: #5e6b72;">{{ $ship->commission_date?->format('F d, Y') ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Displacement</td>
                                    <td style="color: #5e6b72;">{{ number_format($ship->displacement, 0) }} tons</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600; width: 40%;">Length</td>
                                    <td style="color: #5e6b72;">{{ $ship->length }} m</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Beam</td>
                                    <td style="color: #5e6b72;">{{ $ship->beam }} m</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Draft</td>
                                    <td style="color: #5e6b72;">{{ $ship->draft }} m</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Max Speed</td>
                                    <td style="color: #5e6b72;">{{ $ship->max_speed }} knots</td>
                                </tr>
                                <tr>
                                    <td style="color: #1a3a5c; font-weight: 600;">Crew</td>
                                    <td style="color: #5e6b72;">{{ number_format($ship->crew) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Battles Participated -->
        @if($ship->battles->count() > 0)
            <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
                <div class="card-header border-0" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                    <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-trophy"></i> Battles Participated</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        @foreach($ship->battles as $battle)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05); border-left: 4px solid #1a3a5c;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: #1a3a5c; font-weight: 600;">
                                            <a href="{{ route('battles.show', $battle) }}" style="color: #1a3a5c; text-decoration: none;">
                                                {{ $battle->name }}
                                            </a>
                                        </h6>
                                        <small class="text-muted">
                                            <i class="bi bi-calendar"></i> {{ $battle->battle_date->format('F d, Y') }}
                                            <span class="mx-2">•</span>
                                            <i class="bi bi-geo-alt"></i> {{ $battle->battle_site }}
                                        </small>
                                    </div>
                                    <span class="badge ms-2" style="background: {{ $battle->pivot->result === 'Victory' ? 'linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%)' : 'linear-gradient(135deg, #8a782e 0%, #ccb250 100%)' }}; color: white; padding: 6px 14px; border-radius: 12px;">
                                        {{ $battle->pivot->result }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <!-- ============================================ -->
        <!-- AIRCRAFT COMPLEMENT SECTION (for carriers)   -->
        <!-- ============================================ -->
        @if($ship->is_aircraft_carrier && $ship->aircraftModels->count() > 0)
            <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
                <div class="card-header border-0" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                    <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-airplane"></i> Aircraft Complement</h5>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background: rgba(26, 58, 92, 0.05);">
                                <tr>
                                    <th style="color: #1a3a5c;">Aircraft</th>
                                    <th style="color: #1a3a5c;">Type</th>
                                    <th style="color: #1a3a5c;">Quantity</th>
                                    <th style="color: #1a3a5c;">Period</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ship->aircraftModels as $aircraft)
                                    <tr>
                                        <td style="color: #1a3a5c; font-weight: 500;">{{ $aircraft->name }}</td>
                                        <td style="color: #5e6b72;">{{ $aircraft->type->name }}</td>
                                        <td style="color: #5e6b72;">{{ $aircraft->pivot->quantity }}</td>
                                        <td style="color: #5e6b72;">
    @if($aircraft->pivot->start_date)
        @php
            try {
                $startYear = \Carbon\Carbon::parse($aircraft->pivot->start_date)->format('Y');
            } catch (\Exception $e) {
                $startYear = $aircraft->pivot->start_date;
            }
        @endphp
        {{ $startYear }}
    @else
        N/A
    @endif
    @if($aircraft->pivot->end_date)
        @php
            try {
                $endYear = \Carbon\Carbon::parse($aircraft->pivot->end_date)->format('Y');
            } catch (\Exception $e) {
                $endYear = $aircraft->pivot->end_date;
            }
        @endphp
        - {{ $endYear }}
    @endif
</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

    </div>

    <!-- Right Column - Images & Actions -->
    <div class="col-md-4">
        <!-- Images -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-images"></i> Gallery</h6>
            </div>
            <div class="card-body p-3">
                @forelse($ship->images as $image)
                    <div class="mb-3">
                        <img src="{{ $image->image_url }}" class="img-fluid rounded-3" alt="{{ $image->caption }}" style="width: 100%; border: 2px solid rgba(26, 58, 92, 0.1);">
                        @if($image->caption)
                            <p class="text-muted mt-1 mb-0" style="font-size: 0.85rem; color: #5e6b72 !important;">
                                <i class="bi bi-quote"></i> {{ $image->caption }}
                            </p>
                        @endif
                    </div>
                @empty
                    <div class="text-center py-4">
                        <i class="bi bi-image display-4" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important;">No images available</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-gear"></i> Actions</h6>
            </div>
            <div class="card-body p-3">
                @auth
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.ships.edit', $ship) }}" class="btn w-100 mb-2" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                            <i class="bi bi-pencil"></i> Edit Ship
                        </a>
                        <form action="{{ route('admin.ships.destroy', $ship) }}" method="POST" class="w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn w-100" style="background: linear-gradient(135deg, #8a782e 0%, #ccb250 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;" onclick="return confirm('Are you sure you want to delete {{ $ship->name }}?')">
                                <i class="bi bi-trash"></i> Delete Ship
                            </button>
                        </form>
                    @endif
                @endauth
                <a href="{{ route('ships.index') }}" class="btn w-100" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                    <i class="bi bi-arrow-left"></i> Back to Ships
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="card shadow-sm border-0 mt-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-center">
                        <div style="color: #1a3a5c; font-size: 1.5rem; font-weight: 700; font-family: 'Cinzel', serif;">{{ $ship->crew ?? 'N/A' }}</div>
                        <small class="text-muted" style="color: #5e6b72 !important;">Crew</small>
                    </div>
                    <div class="text-center">
                        <div style="color: #1a3a5c; font-size: 1.5rem; font-weight: 700; font-family: 'Cinzel', serif;">{{ $ship->max_speed ?? 'N/A' }}</div>
                        <small class="text-muted" style="color: #5e6b72 !important;">Max Speed (knots)</small>
                    </div>
                    <div class="text-center">
                        <div style="color: #1a3a5c; font-size: 1.5rem; font-weight: 700; font-family: 'Cinzel', serif;">{{ number_format($ship->displacement ?? 0) }}</div>
                        <small class="text-muted" style="color: #5e6b72 !important;">Displacement (tons)</small>
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
    
    .table-hover tbody tr:hover {
        background: rgba(26, 58, 92, 0.03);
    }
    
    .card {
        transition: all 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-2px);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem !important;
        }
        .stat-card {
            padding: 12px;
        }
    }
</style>
@endsection