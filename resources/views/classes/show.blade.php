@extends('layouts.app')

@section('title', $class->name . ' - Class')

@section('content')
<div class="container py-4">
    <!-- Back Button -->
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-outline-naval">
            <i class="bi bi-arrow-left"></i> Back
        </a>
    </div>

    <!-- Class Header -->
    <div class="card-naval mb-4">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c; font-size: 2.5rem;">
                        <i class="bi bi-grid-3x3-gap-fill"></i> {{ $class->name }}
                    </h1>
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-flag"></i> {{ $class->country->name ?? 'Unknown' }}
                        </span>
                        <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-info-circle"></i> {{ $class->type->name ?? 'Unknown Type' }}
                        </span>
                        <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.9rem;">
                            <i class="bi bi-ship"></i> {{ $class->ships->count() }} Ships
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('classes.index') }}" class="btn btn-naval">
                        <i class="bi bi-grid-3x3-gap-fill"></i> All Classes
                    </a>
                </div>
            </div>

            @if($class->description)
                <div class="mt-3 p-3" style="background: rgba(26, 58, 92, 0.05); border-radius: 12px; border-left: 4px solid #1a3a5c;">
                    <p class="mb-0" style="color: #5e6b72;">{{ $class->description }}</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Class Specifications -->
    <div class="card-naval mb-4">
        <div class="card-body p-4">
            <h5 style="color: #1a3a5c; font-weight: 700; font-family: 'Cinzel', serif;">
                <i class="bi bi-list-ul"></i> Class Specifications
            </h5>
            <div class="row mt-3">
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600; width: 40%;">Class Name</td>
                            <td style="color: #5e6b72;">{{ $class->name }}</td>
                        </tr>
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600;">Country</td>
                            <td style="color: #5e6b72;">{{ $class->country->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600;">Type</td>
                            <td style="color: #5e6b72;">{{ $class->type->name ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tr>
                            <td style="color: #1a3a5c; font-weight: 600; width: 40%;">Total Ships</td>
                            <td style="color: #5e6b72;">{{ $class->ships->count() }}</td>
                        </tr>
                        @if($class->year_from)
                            <tr>
                                <td style="color: #1a3a5c; font-weight: 600;">Year From</td>
                                <td style="color: #5e6b72;">{{ $class->year_from }}</td>
                            </tr>
                        @endif
                        @if($class->year_to)
                            <tr>
                                <td style="color: #1a3a5c; font-weight: 600;">Year To</td>
                                <td style="color: #5e6b72;">{{ $class->year_to }}</td>
                            </tr>
                        @endif
                        @if($class->total_built)
                            <tr>
                                <td style="color: #1a3a5c; font-weight: 600;">Total Built</td>
                                <td style="color: #5e6b72;">{{ $class->total_built }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Ships in This Class -->
    <div class="card-naval">
        <div class="card-body p-4">
            <h5 style="color: #1a3a5c; font-weight: 700; font-family: 'Cinzel', serif;">
                <i class="bi bi-ship"></i> Ships in {{ $class->name }} Class ({{ $class->ships->count() }})
            </h5>

            @if($class->ships->count() > 0)
                <div class="row g-4 mt-2">
                    @foreach($class->ships as $ship)
                        <div class="col-md-6 col-lg-4">
                            <div class="ship-card-class h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <h6 class="card-title" style="color: #1a3a5c; font-weight: 600;">
                                            {{ $ship->name }}
                                        </h6>
                                        @if($ship->is_aircraft_carrier)
                                            <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; font-size: 0.6rem; padding: 2px 8px;">
                                                ✈️
                                            </span>
                                        @endif
                                    </div>
                                    <div class="small text-muted mt-1">
                                        @if($ship->launch_date)
                                            <i class="bi bi-calendar"></i>
                                            @if(strtotime($ship->launch_date))
                                                {{ date('Y', strtotime($ship->launch_date)) }}
                                            @else
                                                {{ $ship->launch_date }}
                                            @endif
                                        @endif
                                        @if($ship->displacement)
                                            <span class="mx-1">•</span>
                                            <i class="bi bi-weight-scale"></i> {{ number_format($ship->displacement, 0) }} t
                                        @endif
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{ route('ships.show', $ship) }}" class="btn btn-sm btn-naval">
                                            <i class="bi bi-eye"></i> View Ship
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-4">
                    <i class="bi bi-ship" style="font-size: 2rem; color: #c5d1e0;"></i>
                    <p class="text-muted mt-2">No ships in this class yet.</p>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    .card-naval {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .btn-naval {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border: none;
        padding: 8px 18px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.85rem;
    }
    .btn-naval:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
        color: white;
    }

    .btn-outline-naval {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        padding: 8px 18px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.85rem;
    }
    .btn-outline-naval:hover {
        background: #1a3a5c;
        color: white;
        transform: translateY(-2px);
    }

    .ship-card-class {
        background: rgba(255, 255, 255, 0.95);
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        transition: all 0.3s ease;
        padding: 16px;
    }
    .ship-card-class:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.12);
        border-color: #2e89a8;
    }

    .table-borderless td {
        padding: 6px 0;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem !important;
        }
        .ship-card-class {
            padding: 12px;
        }
    }
</style>
@endsection