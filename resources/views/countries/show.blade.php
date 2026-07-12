@extends('layouts.app')

@section('title', $country->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <!-- Country Header -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c; font-size: 2.5rem;">
                    <i class="bi bi-flag"></i> {{ $country->name }}
                </h1>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-ship"></i> {{ $country->shipClasses->count() }} Ship Classes
                    </span>
                    <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="bi bi-airplane"></i> {{ $country->aircraftModels->count() }} Aircraft Models
                    </span>
                </div>
            </div>
            <a href="{{ route('countries.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 8px 20px; transition: all 0.3s ease;">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

        <!-- Flag Display -->
        @if($country->flag)
            <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden;">
                <div class="card-body text-center p-4">
                    <img src="{{ asset('storage/flags/' . $country->flag) }}" 
                         width="200" height="125" style="object-fit: cover; border-radius: 12px; border: 3px solid rgba(26, 58, 92, 0.1);" 
                         alt="{{ $country->name }}">
                </div>
            </div>
        @endif

        <!-- Ship Classes -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-ship"></i> Ship Classes ({{ $country->shipClasses->count() }})</h5>
            </div>
            <div class="card-body p-4">
                @if($country->shipClasses->count() > 0)
                    <div class="row">
                        @foreach($country->shipClasses as $class)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05); border-left: 4px solid #1a3a5c;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: #1a3a5c; font-weight: 600;">{{ $class->name }}</h6>
                                        <small class="text-muted" style="color: #5e6b72 !important;">
                                            <i class="bi bi-ship"></i> {{ $class->ships->count() }} ships
                                            @if($class->type)
                                                • {{ $class->type->name }}
                                            @endif
                                        </small>
                                    </div>
                                   <a href="{{ route('classes.show', $class->id) }}" class="btn btn-sm" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 8px; transition: all 0.3s ease;">
    <i class="bi bi-eye"></i> View Ships
</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center py-3" style="color: #5e6b72 !important;">No ship classes for this country.</p>
                @endif
            </div>
        </div>

        <!-- Aircraft Models -->
        <div class="card shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; border-radius: 16px 16px 0 0; padding: 16px 24px;">
                <h5 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-airplane"></i> Aircraft Models ({{ $country->aircraftModels->count() }})</h5>
            </div>
            <div class="card-body p-4">
                @if($country->aircraftModels->count() > 0)
                    <div class="row">
                        @foreach($country->aircraftModels as $aircraft)
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center p-3 rounded-3" style="background: rgba(204, 178, 80, 0.05); border-left: 4px solid #ccb250;">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="color: #1a3a5c; font-weight: 600;">{{ $aircraft->name }}</h6>
                                        <small class="text-muted" style="color: #5e6b72 !important;">
                                            @if($aircraft->type)
                                                <i class="bi bi-tag"></i> {{ $aircraft->type->name }}
                                            @endif
                                            @if($aircraft->max_speed)
                                                • {{ $aircraft->max_speed }} knots
                                            @endif
                                        </small>
                                    </div>
                                    @if($aircraft->introduced)
                                        <span class="badge" style="background: #1a3a5c; color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem;">
                                            {{ $aircraft->introduced->format('Y') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center py-3" style="color: #5e6b72 !important;">No aircraft models for this country.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Sidebar -->
    <div class="col-md-4">
        <!-- Quick Stats -->
        <div class="card shadow-sm border-0 mb-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-speedometer2"></i> Quick Stats</h6>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Ship Classes</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">{{ $country->shipClasses->count() }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Total Ships</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">
                        {{ $country->shipClasses->sum(function($class) { return $class->ships->count(); }) }}
                    </span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Aircraft Models</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">{{ $country->aircraftModels->count() }}</span>
                </div>
                <div class="d-flex justify-content-between align-items-center py-2">
                    <span style="color: #1a3a5c;">Country Code</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">#{{ $country->id }}</span>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="card shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
            <div class="card-header border-0" style="background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%); color: white; border-radius: 16px 16px 0 0; padding: 12px 20px;">
                <h6 class="mb-0" style="font-family: 'Cinzel', serif;"><i class="bi bi-compass"></i> Explore</h6>
            </div>
            <div class="card-body p-4">
                <a href="{{ route('ships.index') }}" class="btn w-100 mb-2" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                    <i class="bi bi-ship"></i> Browse All Ships
                </a>
                <a href="{{ route('battles.index') }}" class="btn w-100" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                    <i class="bi bi-trophy"></i> View Battles
                </a>
                <a href="{{ route('countries.index') }}" class="btn w-100 mt-2" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                    <i class="bi bi-arrow-left"></i> All Countries
                </a>
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
    
    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem !important;
        }
    }
</style>
@endsection