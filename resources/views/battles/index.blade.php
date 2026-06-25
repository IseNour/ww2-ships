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

<!-- Search and Filter Section -->
<div class="card shadow-sm mb-4 border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px;">
    <div class="card-body p-4">
        <form method="GET" action="{{ route('battles.index') }}">
            <div class="row g-3">
                <!-- Search -->
                <div class="col-md-4">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">🔍 Search</label>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" 
                               placeholder="Battle name, location..." 
                               value="{{ request('search') }}"
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px 0 0 10px; padding: 10px 16px;">
                        <button type="submit" class="btn" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 0 10px 10px 0; padding: 10px 20px;">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Year Filter -->
                <div class="col-md-3">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">📅 Year</label>
                    <select name="year" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="">All Years</option>
                        @for($year = 1945; $year >= 1939; $year--)
                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                </div>

                <!-- Sort -->
                <div class="col-md-3">
                    <label class="form-label fw-bold" style="color: #1a3a5c;">📊 Sort By</label>
                    <select name="sort" class="form-select" onchange="this.form.submit()" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        <option value="battle_date" {{ request('sort') == 'battle_date' ? 'selected' : '' }}>
                            Date (Newest First)
                        </option>
                        <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>
                            Name
                        </option>
                        <option value="battle_site" {{ request('sort') == 'battle_site' ? 'selected' : '' }}>
                            Location
                        </option>
                    </select>
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    @if(request()->has('search') || request()->has('year') || request()->has('sort'))
                        <a href="{{ route('battles.index') }}" class="btn" style="background: transparent; color: #1a3a5c; border: 2px solid #1a3a5c; border-radius: 10px; padding: 10px 20px; font-weight: 600; transition: all 0.3s ease; width: 100%;">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </a>
                    @endif
                </div>
            </div>
        </form>

        <!-- Active Filters Display -->
        @if(request()->has('search') || request()->has('year'))
            <div class="mt-3">
                <span class="text-muted" style="color: #5e6b72;">Active filters:</span>
                @if(request('search'))
                    <span class="badge me-1" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">
                        Search: {{ request('search') }}
                    </span>
                @endif
                @if(request('year'))
                    <span class="badge me-1" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">
                        Year: {{ request('year') }}
                    </span>
                @endif
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
            <div class="card h-100 shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                <!-- Battle Image -->
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <img src="{{ $battle->thumbnail }}" 
                         class="w-100 h-100" 
                         alt="{{ $battle->name }}"
                         style="object-fit: cover;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); padding: 20px;">
                        <h5 class="card-title mb-0" style="font-family: 'Cinzel', serif; font-weight: 600; color: white;">{{ $battle->name }}</h5>
                    </div>
                </div>
                
                <div class="card-body">
                    <!-- Date & Location -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem;">
                            <i class="bi bi-calendar"></i> {{ $battle->battle_date->format('Y') }}
                        </span>
                        <span style="color: #5e6b72; font-size: 0.85rem;">
                            <i class="bi bi-geo-alt"></i> {{ $battle->battle_site }}
                        </span>
                    </div>
                    
                    <!-- Description -->
                    <p class="card-text" style="color: #5e6b72; font-size: 0.95rem;">{{ Str::limit($battle->description, 90) }}</p>
                    
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
                <p style="color: #5e6b72;">Try adjusting your search filters</p>
            </div>
        </div>
    @endforelse
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $battles->appends(request()->query())->links() }}
</div>

<style>
    .card:hover {
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
    
    /* Pagination styling */
    .pagination .page-link {
        color: #1a3a5c;
        border: 1px solid rgba(26, 58, 92, 0.1);
        transition: all 0.3s ease;
    }
    
    .pagination .page-link:hover {
        background: #1a3a5c;
        color: white;
    }
    
    .pagination .active .page-link {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        border-color: #1a3a5c;
        color: white;
    }
    
    .page-item.active .page-link {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        border-color: #1a3a5c;
        color: white;
    }
</style>
@endsection