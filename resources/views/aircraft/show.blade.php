@extends('layouts.app')

@section('title', $aircraft->name . ' - Aircraft Details')

@section('content')
<div class="container py-4">
    <!-- ============================================ -->
    <!-- BREADCRUMB                                   -->
    <!-- ============================================ -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('aircraft.index') }}">Aircraft</a></li>
            <li class="breadcrumb-item active">{{ $aircraft->name }}</li>
        </ol>
    </nav>

    <!-- ============================================ -->
    <!-- AIRCRAFT HEADER                             -->
    <!-- ============================================ -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">
                ✈️ {{ $aircraft->name }}
            </h1>
            <div class="d-flex flex-wrap gap-2 mt-2">
                @if($aircraft->type)
                    <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; padding: 6px 14px; font-size: 0.9rem;">
                        <i class="bi bi-tag"></i> {{ $aircraft->type->name }}
                    </span>
                @endif
                @if($aircraft->country)
                    <span class="badge" style="background: #6c757d; color: white; padding: 6px 14px; font-size: 0.9rem;">
                        <i class="bi bi-flag"></i> {{ $aircraft->country->name }}
                    </span>
                @endif
                @if($aircraft->introduced)
                    <span class="badge" style="background: #28a745; color: white; padding: 6px 14px; font-size: 0.9rem;">
                        <i class="bi bi-calendar3"></i> Introduced {{ date('Y', strtotime($aircraft->introduced)) }}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('aircraft.index') }}" class="btn btn-outline-naval">
                <i class="bi bi-arrow-left"></i> Back to Aircraft
            </a>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- AIRCRAFT DETAILS                            -->
    <!-- ============================================ -->
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Description -->
            <div class="card-naval mb-4">
                <div class="card-body">
                    <h5 style="color: #1a3a5c; font-weight: 700;">
                        <i class="bi bi-book"></i> Description
                    </h5>
                    <p style="line-height: 1.8;">{{ $aircraft->description ?? 'No description available.' }}</p>
                </div>
            </div>

            <!-- Technical Specifications -->
            <div class="card-naval mb-4">
                <div class="card-body">
                    <h5 style="color: #1a3a5c; font-weight: 700;">
                        <i class="bi bi-info-circle"></i> Technical Specifications
                    </h5>
                    <div class="table-responsive">
                        <table class="table table-bordered specs-table">
                            <tbody>
                                <tr>
                                    <th style="width: 35%; background: #f8fafc;">Aircraft Name</th>
                                    <td>{{ $aircraft->name }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Type</th>
                                    <td>{{ $aircraft->type->name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Country of Origin</th>
                                    <td>{{ $aircraft->country->name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Max Speed</th>
                                    <td>{{ $aircraft->max_speed }} knots</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Range</th>
                                    <td>{{ $aircraft->range }} miles</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Crew</th>
                                    <td>{{ $aircraft->crew }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Armament</th>
                                    <td>{{ $aircraft->armament ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">First Flight</th>
                                    <td>{{ $aircraft->first_flight ? date('d M Y', strtotime($aircraft->first_flight)) : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="background: #f8fafc;">Introduced</th>
                                    <td>{{ $aircraft->introduced ? date('d M Y', strtotime($aircraft->introduced)) : 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Quick Stats Card -->
            <div class="card-naval mb-4">
                <div class="card-body">
                    <h6 style="color: #1a3a5c; font-weight: 700;">
                        <i class="bi bi-speedometer2"></i> Quick Stats
                    </h6>
                    <div class="row g-2 mt-2">
                        <div class="col-6">
                            <div class="stat-box text-center">
                                <div class="stat-value">{{ $aircraft->max_speed }}</div>
                                <div class="stat-label">Max Speed (kn)</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box text-center">
                                <div class="stat-value">{{ $aircraft->range }}</div>
                                <div class="stat-label">Range (mi)</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box text-center">
                                <div class="stat-value">{{ $aircraft->crew }}</div>
                                <div class="stat-label">Crew</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box text-center">
                                <div class="stat-value">{{ $aircraft->introduced ? date('Y', strtotime($aircraft->introduced)) : 'N/A' }}</div>
                                <div class="stat-label">Year Introduced</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carriers That Operated This Aircraft -->
            <div class="card-naval">
                <div class="card-body">
                    <h6 style="color: #1a3a5c; font-weight: 700;">
                        <i class="bi bi-ship"></i> Carriers That Operated This Aircraft
                    </h6>
                    @if($aircraft->ships->count() > 0)
                        <ul class="list-unstyled mt-2 carrier-list">
                            @foreach($aircraft->ships as $ship)
                                <li class="carrier-item">
                                    <a href="{{ route('ships.show', $ship->id) }}" class="carrier-link">
                                        <i class="bi bi-ship"></i> {{ $ship->name }}
                                        @if($ship->pivot->quantity)
                                            <span class="badge bg-secondary">×{{ $ship->pivot->quantity }}</span>
                                        @endif
                                    </a>
                                    @if($ship->pivot->start_date)
                                        <small class="text-muted d-block ms-4">
                                            <i class="bi bi-calendar3"></i> From {{ date('Y', strtotime($ship->pivot->start_date)) }}
                                        </small>
                                    @endif
                                    @if($ship->pivot->notes)
                                        <small class="text-muted d-block ms-4">
                                            <i class="bi bi-sticky"></i> {{ $ship->pivot->notes }}
                                        </small>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-muted mt-2 mb-0">
                            <i class="bi bi-info-circle"></i> No carriers found operating this aircraft.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* ============================================ */
    /* NAVAL BUTTONS                               */
    /* ============================================ */
    .btn-naval {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border: none;
        padding: 10px 24px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
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
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-outline-naval:hover {
        background: #1a3a5c;
        color: white;
        transform: translateY(-2px);
    }

    /* ============================================ */
    /* CARD                                        */
    /* ============================================ */
    .card-naval {
        background: white;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }
    .card-naval:hover {
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    .card-naval .card-body {
        padding: 24px;
    }

    /* ============================================ */
    /* SPECS TABLE                                 */
    /* ============================================ */
    .specs-table {
        margin-bottom: 0;
    }
    .specs-table th {
        font-weight: 600;
        color: #1a3a5c;
        font-size: 0.9rem;
    }
    .specs-table td {
        font-weight: 500;
        color: #2d3748;
    }
    .specs-table tr {
        border-bottom: 1px solid #e2e8f0;
    }
    .specs-table tr:last-child {
        border-bottom: none;
    }
    .specs-table th,
    .specs-table td {
        padding: 12px 16px;
        vertical-align: middle;
    }

    /* ============================================ */
    /* STAT BOXES                                  */
    /* ============================================ */
    .stat-box {
        background: #f8fafc;
        border-radius: 8px;
        padding: 12px 8px;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    .stat-box:hover {
        background: #edf2f7;
        transform: translateY(-2px);
    }
    .stat-value {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1a3a5c;
        line-height: 1.2;
    }
    .stat-label {
        font-size: 0.7rem;
        color: #718096;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 2px;
    }

    /* ============================================ */
    /* CARRIER LIST                                */
    /* ============================================ */
    .carrier-list {
        margin-bottom: 0;
    }
    .carrier-item {
        padding: 10px 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .carrier-item:last-child {
        border-bottom: none;
    }
    .carrier-link {
        color: #1a3a5c;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
        display: inline-block;
    }
    .carrier-link:hover {
        color: #2e89a8;
        text-decoration: underline;
    }
    .carrier-link .badge {
        font-size: 0.7rem;
        padding: 2px 8px;
        margin-left: 6px;
    }

    /* ============================================ */
    /* BREADCRUMB                                  */
    /* ============================================ */
    .breadcrumb {
        background: transparent;
        padding: 0;
        margin-bottom: 0;
    }
    .breadcrumb-item a {
        color: #1a3a5c;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .breadcrumb-item a:hover {
        color: #2e89a8;
        text-decoration: underline;
    }
    .breadcrumb-item.active {
        color: #718096;
        font-weight: 500;
    }

    /* ============================================ */
    /* RESPONSIVE                                  */
    /* ============================================ */
    @media (max-width: 768px) {
        .stat-box {
            padding: 8px 4px;
        }
        .stat-value {
            font-size: 1.2rem;
        }
        .specs-table th,
        .specs-table td {
            padding: 8px 12px;
            font-size: 0.85rem;
        }
        .card-naval .card-body {
            padding: 16px;
        }
    }
</style>
@endsection