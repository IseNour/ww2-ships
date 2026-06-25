@extends('layouts.app')

@section('title', 'All Ships')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">⚓ All Ships</h1>
    @auth
        @if(Auth::user()->isAdmin())
            <a href="{{ route('admin.ships.create') }}" class="btn" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; padding: 10px 20px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                <i class="bi bi-plus-circle"></i> Add New Ship
            </a>
        @endif
    @endauth
</div>

<!-- Search and Filter Section -->
<div class="card shadow-sm mb-4 border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
    <div class="card-body p-4">
        <form method="GET" action="{{ route('ships.index') }}" id="filterForm">
            <div class="row g-3">
                <!-- Search -->
                <div class="col-md-3">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">🔍 Search</label>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" 
                               placeholder="Ship name, class..." 
                               value="{{ $filters['search'] ?? '' }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px 0 0 10px; padding: 10px 16px;">
                        @if(!empty($filters['search']))
                            <a href="{{ route('ships.index') }}" class="btn" style="border: 2px solid rgba(26, 58, 92, 0.1); border-left: none; border-radius: 0 10px 10px 0; color: #1a3a5c; background: white;">
                                <i class="bi bi-x"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Country Filter -->
                <div class="col-md-2">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">🌍 Country</label>
                    <select name="country" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="">All Countries</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" 
                                {{ (isset($filters['country']) && $filters['country'] == $country->id) ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Ship Type Filter -->
                <div class="col-md-2">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">🚢 Ship Type</label>
                    <select name="type" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="">All Types</option>
                        @foreach($shipTypes as $type)
                            <option value="{{ $type->id }}" 
                                {{ (isset($filters['type']) && $filters['type'] == $type->id) ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Carrier Filter -->
                <div class="col-md-2">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">✈️ Carrier</label>
                    <select name="carrier" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="">All</option>
                        <option value="yes" {{ (isset($filters['carrier']) && $filters['carrier'] == 'yes') ? 'selected' : '' }}>
                            Yes
                        </option>
                        <option value="no" {{ (isset($filters['carrier']) && $filters['carrier'] == 'no') ? 'selected' : '' }}>
                            No
                        </option>
                    </select>
                </div>

                <!-- Sort -->
                <div class="col-md-2">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">📊 Sort By</label>
                    <select name="sort" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="name" {{ (isset($filters['sort']) && $filters['sort'] == 'name') ? 'selected' : '' }}>
                            Name
                        </option>
                        <option value="launch_date" {{ (isset($filters['sort']) && $filters['sort'] == 'launch_date') ? 'selected' : '' }}>
                            Launch Date
                        </option>
                        <option value="displacement" {{ (isset($filters['sort']) && $filters['sort'] == 'displacement') ? 'selected' : '' }}>
                            Displacement
                        </option>
                        <option value="max_speed" {{ (isset($filters['sort']) && $filters['sort'] == 'max_speed') ? 'selected' : '' }}>
                            Max Speed
                        </option>
                        <option value="crew" {{ (isset($filters['sort']) && $filters['sort'] == 'crew') ? 'selected' : '' }}>
                            Crew Size
                        </option>
                    </select>
                </div>
            </div>

            <!-- Advanced Filters (Collapsible) -->
            <div class="row g-3 mt-2">
                <div class="col-12">
                    <button class="btn btn-sm" type="button" 
                            data-bs-toggle="collapse" data-bs-target="#advancedFilters"
                            style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 8px 20px; font-weight: 600; transition: all 0.3s ease;">
                        <i class="bi bi-sliders"></i> Advanced Filters
                    </button>
                </div>
            </div>

            <div class="collapse mt-3" id="advancedFilters">
                <div class="row g-3">
                    <!-- Year Range -->
                    <div class="col-md-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">📅 Launch Year From</label>
                        <input type="number" name="year_from" class="form-control" 
                               placeholder="e.g., 1939" 
                               value="{{ $filters['year_from'] ?? '' }}"
                               min="{{ $yearMin }}" max="{{ $yearMax }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">📅 Launch Year To</label>
                        <input type="number" name="year_to" class="form-control" 
                               placeholder="e.g., 1945" 
                               value="{{ $filters['year_to'] ?? '' }}"
                               min="{{ $yearMin }}" max="{{ $yearMax }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                    </div>

                    <!-- Displacement Range -->
                    <div class="col-md-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">⚖️ Min Displacement (tons)</label>
                        <input type="number" name="displacement_min" class="form-control" 
                               placeholder="e.g., 10000" 
                               value="{{ $filters['displacement_min'] ?? '' }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">⚖️ Max Displacement (tons)</label>
                        <input type="number" name="displacement_max" class="form-control" 
                               placeholder="e.g., 50000" 
                               value="{{ $filters['displacement_max'] ?? '' }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; padding: 10px 24px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                            <i class="bi bi-search"></i> Apply Filters
                        </button>
                        <a href="{{ route('ships.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; padding: 10px 24px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset All
                        </a>
                    </div>
                </div>
            </div>
        </form>

        <!-- Active Filters Display -->
        @if(!empty($filters) && count(array_filter($filters)) > 0)
            <div class="mt-3">
                <span class="text-muted" style="color: #5e6b72;">Active filters:</span>
                @foreach($filters as $key => $value)
                    @if(!empty($value) && $key != 'sort' && $key != 'order' && $key != 'page')
                        <span class="badge me-1" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">
                            {{ ucwords(str_replace('_', ' ', $key)) }}: {{ $value }}
                            <a href="?{{ http_build_query(array_merge($filters, [$key => ''])) }}" 
                               class="text-white text-decoration-none ms-1">
                                <i class="bi bi-x-circle"></i>
                            </a>
                        </span>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</div>

<!-- Results Count -->
<div class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted" style="color: #5e6b72;">Showing {{ $ships->firstItem() ?? 0 }} - {{ $ships->lastItem() ?? 0 }} of {{ $ships->total() }} ships</span>
</div>

<!-- Ships Grid -->
<div class="row">
    @forelse($ships as $ship)
        <div class="col-md-4 mb-4">
            <div class="card ship-card h-100 shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                <img src="{{ $ship->thumbnail }}" class="card-img-top thumbnail" alt="{{ $ship->name }}" style="height: 220px; object-fit: cover; border-bottom: 3px solid #1a3a5c;">
                <div class="card-body">
                    <h5 class="card-title" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-weight: 600;">{{ $ship->name }}</h5>
                    <p class="card-text">
                        <small class="text-muted">
                            <i class="bi bi-tag" style="color: #1a3a5c;"></i> {{ $ship->class->name }}<br>
                            <i class="bi bi-flag" style="color: #1a3a5c;"></i> {{ $ship->class->country->name }}
                        </small>
                    </p>
                    <div class="d-flex flex-wrap gap-1 mb-2">
                        @if($ship->is_aircraft_carrier)
                            <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem;">
                                ✈️ Aircraft Carrier
                            </span>
                        @endif
                        @if($ship->launch_date)
                            <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem;">
                                <i class="bi bi-calendar"></i> {{ $ship->launch_date->format('Y') }}
                            </span>
                        @endif
                    </div>
                    <p class="card-text mt-2" style="color: #5e6b72;">{{ Str::limit($ship->description, 80) }}</p>
                    <a href="{{ route('ships.show', $ship) }}" class="btn btn-sm" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 8px; padding: 6px 16px; transition: all 0.3s ease;">
                        <i class="bi bi-eye"></i> View Details
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert text-center py-5 border-0" style="background: rgba(26, 58, 92, 0.05); border-radius: 16px; color: #1a3a5c;">
                <i class="bi bi-search display-4 d-block mb-3" style="color: #1a3a5c;"></i>
                <h4 style="font-family: 'Cinzel', serif; color: #1a3a5c;">No ships found</h4>
                <p style="color: #5e6b72;">Try adjusting your search filters or <a href="{{ route('ships.index') }}" style="color: #1a3a5c; font-weight: 600;">reset all filters</a></p>
            </div>
        </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $ships->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
</div>

<style>
    .ship-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 48px rgba(26, 58, 92, 0.15) !important;
        border-color: rgba(26, 58, 92, 0.2);
    }
    
    .thumbnail {
        width: 100%;
        height: 220px;
        object-fit: cover;
        background: #f0f4f8;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #1a3a5c !important;
        box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1) !important;
    }

    /* ============================================ */
    /* PAGINATION STYLING (Public)                  */
    /* ============================================ */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        margin: 20px 0;
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
        cursor: pointer;
    }

    .pagination .page-link:hover {
        background: #1a3a5c;
        color: white;
        border-color: #1a3a5c;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(26, 58, 92, 0.2);
    }

    .pagination .page-item.disabled .page-link {
        opacity: 0.4;
        cursor: not-allowed;
        transform: none !important;
        box-shadow: none !important;
    }

    .pagination .page-item.disabled .page-link:hover {
        background: white;
        color: #1a3a5c;
        transform: none !important;
        box-shadow: none !important;
    }

    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border-color: #1a3a5c;
        box-shadow: 0 4px 12px rgba(26, 58, 92, 0.25);
        font-weight: 600;
    }

    .pagination .page-item.active .page-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(26, 58, 92, 0.35);
    }

    .pagination .page-item:first-child .page-link,
    .pagination .page-item:last-child .page-link {
        padding: 0 18px;
        font-weight: 600;
    }

    .pagination .page-item .page-link {
        min-width: 40px;
        text-align: center;
    }

    .pagination-results {
        text-align: center;
        margin-top: 12px;
        color: #5e6b72;
        font-size: 0.85rem;
    }

    .pagination-results span {
        font-weight: 600;
        color: #1a3a5c;
    }

    @media (max-width: 768px) {
        .pagination {
            gap: 4px;
        }
        .pagination .page-link {
            min-width: 32px;
            height: 32px;
            font-size: 0.75rem;
            padding: 0 8px;
        }
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            padding: 0 10px;
            font-size: 0.75rem;
        }
        .pagination-results {
            font-size: 0.75rem;
        }
    }
</style>
@endsection