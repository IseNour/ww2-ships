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
                    <!-- Class Badge -->
                    <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-tag"></i> {{ $ship->class->name }}
                    </span>
                    
                    <!-- Class Country Badge -->
                    <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-building"></i> Class: {{ $ship->class->country->name }}
                    </span>
                    
                    <!-- Operator Country Badge (if different from class country) -->
                    @if($ship->operatorCountry && $ship->operatorCountry->id != $ship->class->country->id)
                        <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-flag"></i> Operated by: {{ $ship->operatorCountry->name }}
                        </span>
                    @endif
                    
                    <!-- Ship Type Badge -->
                    <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-info-circle"></i> {{ $ship->class->type->name ?? 'Unknown' }}
                    </span>
                    
                    @if($ship->is_aircraft_carrier)
                        <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-airplane"></i> Aircraft Carrier
                        </span>
                    @endif
                    
                    @if($ship->launch_date)
                        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-calendar"></i> @if($ship->launch_date)
    @if(strtotime($ship->launch_date))
        {{ date('Y', strtotime($ship->launch_date)) }}
    @else
        {{ $ship->launch_date }}
    @endif
@else
    N/A
@endif
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
                            <td style="color: #1a3a5c; font-weight: 600;">Class Country</td>
                            <td style="color: #5e6b72;">{{ $ship->class->country->name }}</td>
                        </tr>
                        @if($ship->operatorCountry && $ship->operatorCountry->id != $ship->class->country->id)
                            <tr>
                                <td style="color: #1a3a5c; font-weight: 600;">Operator Country</td>
                                <td style="color: #5e6b72;">
                                    <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 4px 12px; border-radius: 12px;">
                                        {{ $ship->operatorCountry->name }}
                                    </span>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600;">Launch Date</td>
                            <td style="color: #5e6b72;">
                                @if($ship->launch_date)
                                    @if(strtotime($ship->launch_date))
                                        {{ date('F d, Y', strtotime($ship->launch_date)) }}
                                    @else
                                        {{ $ship->launch_date }}
                                    @endif
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600;">Commission Date</td>
                            <td style="color: #5e6b72;">
                                @if($ship->commission_date)
                                    @if(strtotime($ship->commission_date))
                                        {{ date('F d, Y', strtotime($ship->commission_date)) }}
                                    @else
                                        {{ $ship->commission_date }}
                                    @endif
                                @else
                                    N/A
                                @endif
                            </td>
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
                    @php
                        $battleResult = $battle->pivot->battle_result ?? 'Unknown';
                        $shipStatus = $battle->pivot->ship_status ?? null;

                        $resultColor = match($battleResult) {
                            'Victory' => 'linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%)',
                            'Defeat' => 'linear-gradient(135deg, #c0392b 0%, #7b241c 100%)',
                            'Draw' => 'linear-gradient(135deg, #6c757d 0%, #495057 100%)',
                            default => 'linear-gradient(135deg, #5e6b72 0%, #303a42 100%)'
                        };

                        $statusColor = match($shipStatus) {
                            'Undamaged' => '#28a745',
                            'Lightly Damaged' => '#90be6d',
                            'Damaged' => '#fd7e14',
                            'Heavily Damaged' => '#dc3545',
                            'Sunk' => '#ccb250',
                            'Scuttled' => '#8a782e',
                            default => '#5e6b72'
                        };
                    @endphp

                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05); border-left: 4px solid {{ $battleResult === 'Victory' ? '#2e89a8' : ($battleResult === 'Defeat' ? '#c0392b' : '#1a3a5c') }};">
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
                                @if($shipStatus)
                                    <br>
                                    <span class="badge" style="background: {{ $statusColor }}; color: white; padding: 2px 10px; border-radius: 10px; font-size: 0.65rem;">
                                        <i class="bi bi-shield"></i> {{ $shipStatus }}
                                    </span>
                                @endif
                            </div>
                            <span class="badge ms-2" style="background: {{ $resultColor }}; color: white; padding: 6px 14px; border-radius: 12px;">
                                {{ $battleResult }}
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
                <div class="card-header border-0 d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                    <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-airplane"></i> Aircraft Complement</h5>
                    <a href="{{ route('aircraft.index') }}" class="btn btn-sm" style="background: rgba(255,255,255,0.2); color: white; border: none; border-radius: 8px; padding: 4px 16px; transition: all 0.3s ease;">
                        <i class="bi bi-airplane"></i> View All Aircraft
                    </a>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background: rgba(26, 58, 92, 0.05);">
                                <tr>
                                    <th style="color: #1a3a5c;">Aircraft</th>
                                    <th style="color: #1a3a5c;">Type</th>
                                    <th style="color: #1a3a5c;">Quantity</th>
                                    <th style="color: #1a3a5c; text-align: center;">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ship->aircraftModels as $aircraft)
                                    <tr>
                                        <td style="color: #1a3a5c; font-weight: 500;">{{ $aircraft->name }}</td>
                                        <td>
                                            <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; padding: 4px 12px; border-radius: 12px;">
                                                {{ $aircraft->type->name ?? 'N/A' }}
                                            </span>
                                        </td>
                                        <td style="color: #5e6b72; font-weight: 600;">{{ $aircraft->pivot->quantity }}</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#aircraftModal{{ $aircraft->id }}" style="border-radius: 8px; padding: 4px 14px;">
                                                <i class="bi bi-eye"></i> View
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ============================================ -->
            <!-- AIRCRAFT MODALS                              -->
            <!-- ============================================ -->
            @foreach($ship->aircraftModels as $aircraft)
                <div class="modal fade" id="aircraftModal{{ $aircraft->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
                            <div class="modal-header" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border-radius: 16px 16px 0 0; padding: 20px 24px;">
                                <h5 class="modal-title" style="font-family: 'Cinzel', serif;">
                                    <i class="bi bi-airplane"></i> {{ $aircraft->name }}
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body p-4">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <h6 style="color: #1a3a5c; font-weight: 700; border-bottom: 2px solid #1a3a5c; padding-bottom: 8px; margin-bottom: 16px;">
                                            <i class="bi bi-info-circle"></i> Specifications
                                        </h6>
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600; width: 40%;">Type</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->type->name ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Country</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->country->name ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Max Speed</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->max_speed }} knots</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Range</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->range }} miles</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Crew</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->crew }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <h6 style="color: #1a3a5c; font-weight: 700; border-bottom: 2px solid #1a3a5c; padding-bottom: 8px; margin-bottom: 16px;">
                                            <i class="bi bi-calendar"></i> History
                                        </h6>
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600; width: 40%;">First Flight</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->first_flight ? date('d M Y', strtotime($aircraft->first_flight)) : 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Introduced</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->introduced ? date('d M Y', strtotime($aircraft->introduced)) : 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Armament</td>
                                                <td style="color: #5e6b72;">{{ $aircraft->armament ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <td style="color: #1a3a5c; font-weight: 600;">Carried On</td>
                                                <td style="color: #5e6b72;">
                                                    {{ $ship->name }}
                                                    @if($aircraft->pivot->quantity)
                                                        <span class="badge bg-secondary">×{{ $aircraft->pivot->quantity }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                @if($aircraft->description)
                                    <div class="mt-3 p-3" style="background: rgba(26, 58, 92, 0.05); border-radius: 12px; border-left: 4px solid #1a3a5c;">
                                        <strong style="color: #1a3a5c;">Description:</strong>
                                        <p class="mt-2 mb-0" style="color: #5e6b72; line-height: 1.6;">{{ $aircraft->description }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #e2e8f0; padding: 16px 24px;">
                                <a href="{{ route('aircraft.show', $aircraft->id) }}" class="btn btn-naval" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 10px; padding: 8px 20px; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="bi bi-airplane"></i> View Full Aircraft Page
                                </a>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="border-radius: 10px; padding: 8px 20px;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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