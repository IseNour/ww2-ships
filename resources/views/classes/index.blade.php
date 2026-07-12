@extends('layouts.app')

@section('title', 'Ship Classes')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">
            <i class="bi bi-grid-3x3-gap-fill"></i> Ship Classes
        </h1>
        <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 8px 16px; font-size: 1rem;">
            {{ $classes->total() }} Classes
        </span>
    </div>

    <!-- Filters -->
    <div class="card-naval mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('classes.index') }}">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Search classes..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <select name="country" class="form-select">
                            <option value="">All Countries</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ request('country') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="type" class="form-select">
                            <option value="">All Types</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-naval w-100">Filter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Classes Grid -->
    <div class="row g-4">
        @forelse($classes as $class)
            <div class="col-md-6 col-lg-4">
                <div class="class-card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title" style="color: #1a3a5c; font-weight: 600;">
                                {{ $class->name }}
                            </h5>
                            <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white;">
                                {{ $class->ships->count() }}
                            </span>
                        </div>
                        <div class="small text-muted mt-1">
                            <i class="bi bi-flag"></i> {{ $class->country->name ?? 'N/A' }}
                            <span class="mx-1">•</span>
                            <i class="bi bi-info-circle"></i> {{ $class->type->name ?? 'N/A' }}
                        </div>
                        @if($class->description)
                            <p class="card-text small mt-2" style="color: #5e6b72;">{{ Str::limit($class->description, 80) }}</p>
                        @endif
                        <a href="{{ route('classes.show', $class->id) }}" class="btn btn-sm btn-naval mt-2">
                            <i class="bi bi-eye"></i> View Class
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-grid-3x3-gap-fill" style="font-size: 3rem; color: #c5d1e0;"></i>
                <p class="text-muted mt-3">No classes found matching your criteria.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $classes->links('vendor.pagination.bootstrap-5') }}
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

    .class-card {
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        transition: all 0.3s ease;
        padding: 16px;
    }
    .class-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.12);
        border-color: #2e89a8;
    }

    .form-control:focus, .form-select:focus {
        border-color: #1a3a5c !important;
        box-shadow: 0 0 0 3px rgba(26, 58, 92, 0.1) !important;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem !important;
        }
        .class-card {
            padding: 12px;
        }
    }
</style>
@endsection