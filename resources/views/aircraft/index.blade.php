@extends('layouts.app')

@section('title', 'Aircraft Encyclopedia')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">
            <i class="bi bi-airplane"></i> Aircraft Encyclopedia
        </h1>
        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 8px 16px; font-size: 1rem;">
            {{ $aircraft->total() }} Aircraft Models
        </span>
    </div>

    <!-- ============================================ -->
    <!-- FILTER / SEARCH SECTION                       -->
    <!-- ============================================ -->
    <div class="card-naval mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('aircraft.index') }}" id="filterForm">
                <div class="row g-3 align-items-end">
                    <!-- Search -->
                    <div class="col-md-4">
                        <label for="search" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                            <i class="bi bi-search"></i> Search
                        </label>
                        <input type="text" 
                               name="search" 
                               id="search" 
                               class="form-control form-control-naval" 
                               placeholder="Search by name or description..."
                               value="{{ $filters['search'] ?? '' }}">
                    </div>

                    <!-- Country Filter -->
                    <div class="col-md-3">
                        <label for="country" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                            <i class="bi bi-flag"></i> Country
                        </label>
                        <select name="country" id="country" class="form-select form-select-naval">
                            <option value="">All Countries</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" 
                                    {{ (isset($filters['country']) && $filters['country'] == $country->id) ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Type Filter -->
                    <div class="col-md-3">
                        <label for="type" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                            <i class="bi bi-tag"></i> Aircraft Type
                        </label>
                        <select name="type" id="type" class="form-select form-select-naval">
                            <option value="">All Types</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" 
                                    {{ (isset($filters['type']) && $filters['type'] == $type->id) ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sort -->
                    <div class="col-md-2">
                        <label for="sort" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                            <i class="bi bi-arrow-up-down"></i> Sort By
                        </label>
                        <select name="sort" id="sort" class="form-select form-select-naval">
                            <option value="name" {{ (isset($filters['sort']) && $filters['sort'] == 'name') ? 'selected' : '' }}>
                                Name
                            </option>
                            <option value="max_speed" {{ (isset($filters['sort']) && $filters['sort'] == 'max_speed') ? 'selected' : '' }}>
                                Max Speed
                            </option>
                            <option value="range" {{ (isset($filters['sort']) && $filters['sort'] == 'range') ? 'selected' : '' }}>
                                Range
                            </option>
                            <option value="crew" {{ (isset($filters['sort']) && $filters['sort'] == 'crew') ? 'selected' : '' }}>
                                Crew
                            </option>
                            <option value="first_flight" {{ (isset($filters['sort']) && $filters['sort'] == 'first_flight') ? 'selected' : '' }}>
                                First Flight
                            </option>
                            <option value="introduced" {{ (isset($filters['sort']) && $filters['sort'] == 'introduced') ? 'selected' : '' }}>
                                Introduced
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-naval">
                            <i class="bi bi-funnel"></i> Apply Filters
                        </button>
                        <a href="{{ route('aircraft.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                        <span class="ms-3 text-muted" style="font-size: 0.9rem;">
                            <i class="bi bi-info-circle"></i> 
                            Found <strong>{{ $aircraft->total() }}</strong> aircraft model(s)
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ============================================ -->
    <!-- AIRCRAFT GRID                                -->
    <!-- ============================================ -->
    @if($aircraft->count() > 0)
        <div class="row g-4">
            @foreach($aircraft as $model)
                <div class="col-md-4 col-lg-3">
                    <div class="card aircraft-card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">{{ $model->name }}</h5>
                                @if($model->type)
                                    <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white;">
                                        {{ $model->type->name }}
                                    </span>
                                @endif
                            </div>
                            
                            <div class="mb-2">
                                @if($model->country)
                                    <span class="badge bg-secondary">
                                        <i class="bi bi-flag"></i> {{ $model->country->name }}
                                    </span>
                                @endif
                            </div>

                            <div class="aircraft-stats small text-muted mb-2">
                                <div class="row">
                                    <div class="col-6">
                                        <i class="bi bi-speedometer2"></i> {{ $model->max_speed }} kn
                                    </div>
                                    <div class="col-6">
                                        <i class="bi bi-rulers"></i> {{ $model->range }} mi
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <i class="bi bi-people"></i> {{ $model->crew }} crew
                                    </div>
                                    <div class="col-6">
                                        <i class="bi bi-calendar3"></i> {{ $model->introduced ? date('Y', strtotime($model->introduced)) : 'N/A' }}
                                    </div>
                                </div>
                            </div>

                            @if($model->description)
                                <p class="card-text small">{{ Str::limit($model->description, 80) }}</p>
                            @endif

                            <a href="{{ route('aircraft.show', $model->id) }}" class="btn btn-sm btn-outline-naval w-100 mt-2">
                                <i class="bi bi-eye"></i> View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $aircraft->links('vendor.pagination.bootstrap-5') }}
        </div>
    @else
        <div class="text-center py-5">
            <i class="bi bi-airplane" style="font-size: 4rem; color: #dee2e6;"></i>
            <h4 class="mt-3 text-muted">No aircraft found matching your criteria</h4>
            <p class="text-muted">Try adjusting your filters or search terms.</p>
            <a href="{{ route('aircraft.index') }}" class="btn btn-naval">
                <i class="bi bi-arrow-counterclockwise"></i> Clear All Filters
            </a>
        </div>
    @endif
</div>

<style>
    /* ============================================ */
    /* NAVAL BUTTONS                               */
    /* ============================================ */
    .btn-naval {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
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
        padding: 6px 14px;
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
    /* FORM CONTROLS                               */
    /* ============================================ */
    .form-control-naval,
    .form-select-naval {
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        padding: 8px 14px;
        transition: all 0.3s ease;
        background-color: white;
    }
    .form-control-naval:focus,
    .form-select-naval:focus {
        border-color: #2e89a8;
        box-shadow: 0 0 0 3px rgba(46, 137, 168, 0.15);
    }

    /* ============================================ */
    /* CARD                                        */
    /* ============================================ */
    .card-naval {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .aircraft-card {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        transition: all 0.3s ease;
        background: white;
    }
    .aircraft-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.12);
        border-color: #2e89a8;
    }

    .aircraft-card .card-title {
        font-size: 1rem;
        font-weight: 700;
        color: #1a3a5c;
    }

    .aircraft-stats {
        background: #f8fafc;
        padding: 8px 12px;
        border-radius: 8px;
        font-size: 0.8rem;
    }
    .aircraft-stats i {
        color: #2e89a8;
        width: 18px;
    }

    /* ============================================ */
    /* PAGINATION                                  */
    /* ============================================ */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
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
        border: 2px solid rgba(26, 58, 92, 0.12);
        border-radius: 8px;
        color: #1a3a5c;
        background: white;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.25s ease;
    }
    .pagination .page-link:hover {
        background: #1a3a5c;
        color: white;
        border-color: #1a3a5c;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(26, 58, 92, 0.2);
    }
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border-color: #1a3a5c;
        box-shadow: 0 4px 12px rgba(26, 58, 92, 0.25);
        font-weight: 600;
    }
    .pagination .page-item.disabled .page-link {
        opacity: 0.4;
        cursor: not-allowed;
        transform: none !important;
        box-shadow: none !important;
    }

    /* ============================================ */
    /* RESPONSIVE                                  */
    /* ============================================ */
    @media (max-width: 768px) {
        .aircraft-card {
            margin-bottom: 0;
        }
        .btn-naval {
            padding: 6px 14px;
            font-size: 0.85rem;
        }
        .form-control-naval,
        .form-select-naval {
            font-size: 0.85rem;
        }
        .pagination .page-link {
            min-width: 32px;
            height: 32px;
            font-size: 0.75rem;
            padding: 0 8px;
        }
    }
</style>
@endsection