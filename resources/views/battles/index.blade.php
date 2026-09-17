@extends('layouts.app')

@section('title', 'All Battles')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">🏆 All Battles</h1>
    @auth
        @if(Auth::user()->isAdmin())
            <a href="{{ route('admin.battles.create') }}" class="btn" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; padding: 10px 20px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                <i class="bi bi-plus-circle"></i> Add New Battle
            </a>
        @endif
    @endauth
</div>

<!-- ============================================ -->
<!-- FILTER / SEARCH SECTION                       -->
<!-- ============================================ -->
<div class="card shadow-sm mb-4 border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
    <div class="card-body p-4">
        <form method="GET" action="{{ route('battles.index') }}" id="filterForm">
            <div class="row g-3 align-items-end">
                <!-- Search -->
                <div class="col-md-4">
                    <label for="search" class="form-label fw-bold" style="color: #1a3a5c;">
                        <i class="bi bi-search"></i> Search
                    </label>
                    <input type="text" 
                           name="search" 
                           id="search" 
                           class="form-control" 
                           placeholder="Battle name or location..."
                           value="{{ $filters['search'] ?? '' }}"
                           style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                </div>

                <!-- Date From -->
                <div class="col-md-3">
                    <label for="date_from" class="form-label fw-bold" style="color: #1a3a5c;">
                        <i class="bi bi-calendar-start"></i> Date From
                    </label>
                    <input type="date" 
                           name="date_from" 
                           id="date_from" 
                           class="form-control" 
                           value="{{ $filters['date_from'] ?? '' }}"
                           style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                </div>

                <!-- Date To -->
                <div class="col-md-3">
                    <label for="date_to" class="form-label fw-bold" style="color: #1a3a5c;">
                        <i class="bi bi-calendar-end"></i> Date To
                    </label>
                    <input type="date" 
                           name="date_to" 
                           id="date_to" 
                           class="form-control" 
                           value="{{ $filters['date_to'] ?? '' }}"
                           style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; padding: 10px 24px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                        <i class="bi bi-funnel"></i> Apply Filters
                    </button>
                    <a href="{{ route('battles.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; padding: 10px 24px; border-radius: 10px; font-weight: 600; transition: all 0.3s ease;">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                    <span class="ms-3 text-muted" style="font-size: 0.9rem;">
                        <i class="bi bi-info-circle"></i> 
                        Found <strong>{{ $battles->total() }}</strong> battle(s)
                    </span>
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
    <span class="text-muted" style="color: #5e6b72;">Showing {{ $battles->firstItem() ?? 0 }} - {{ $battles->lastItem() ?? 0 }} of {{ $battles->total() }} battles</span>
</div>

<!-- Battles Grid -->
<div class="row">
    @forelse($battles as $battle)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 battle-card" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                <!-- Battle Image -->
                <div style="height: 200px; overflow: hidden; position: relative;">
                    @if($battle->image_url)
                        <img src="{{ $battle->image_url }}" 
                             class="w-100 h-100" 
                             alt="{{ $battle->name }}"
                             style="object-fit: cover;">
                    @else
                        <div style="height: 100%; background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-trophy" style="font-size: 4rem; color: rgba(255,255,255,0.4);"></i>
                        </div>
                    @endif
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); padding: 20px;">
                        <h5 class="card-title mb-0" style="font-family: 'Cinzel', serif; font-weight: 600; color: white; font-size: 1.1rem;">{{ $battle->name }}</h5>
                    </div>
                </div>
                
                <div class="card-body">
                    <!-- Date & Location -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem;">
                            <i class="bi bi-calendar"></i> {{ $battle->battle_date->format('Y') }}
                        </span>
                        <span style="color: #5e6b72; font-size: 0.85rem;">
                            <i class="bi bi-geo-alt"></i> {{ Str::limit($battle->battle_site, 20) }}
                        </span>
                    </div>
                    
                    <!-- Description -->
                    <p class="card-text" style="color: #5e6b72; font-size: 0.9rem; line-height: 1.5;">{{ Str::limit($battle->description, 100) }}</p>
                    
                    <!-- Ships Count -->
                    <div class="mb-2">
                        <span class="badge" style="background: rgba(26, 58, 92, 0.1); color: #1a3a5c; padding: 4px 12px; border-radius: 12px; font-size: 0.8rem;">
                            <i class="bi bi-ship"></i> {{ $battle->ships->count() }} ships participated
                        </span>
                    </div>
                </div>
                
                <div class="card-footer border-0" style="background: transparent; padding: 0 20px 20px 20px;">
                    <a href="{{ route('battles.show', $battle) }}" class="btn w-100" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 10px; padding: 10px; transition: all 0.3s ease;">
                        <i class="bi bi-eye"></i> View Battle Details
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert text-center py-5 border-0" style="background: rgba(26, 58, 92, 0.05); border-radius: 16px; color: #1a3a5c;">
                <i class="bi bi-trophy display-4 d-block mb-3" style="color: #1a3a5c;"></i>
                <h4 style="font-family: 'Cinzel', serif; color: #1a3a5c;">No battles found</h4>
                <p style="color: #5e6b72;">Try adjusting your search filters or <a href="{{ route('battles.index') }}" style="color: #1a3a5c; font-weight: 600;">reset all filters</a></p>
            </div>
        </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $battles->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
</div>

<style>
    .battle-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 48px rgba(26, 58, 92, 0.15) !important;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #1a3a5c !important;
        box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1) !important;
    }

    /* Pagination */
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

    .pagination .page-item:first-child .page-link,
    .pagination .page-item:last-child .page-link {
        padding: 0 18px;
        font-weight: 600;
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
    }
</style>
@endsection