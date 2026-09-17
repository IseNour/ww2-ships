@extends('admin.layouts.admin')

@section('title', 'Manage Battles')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">
        <i class="bi bi-trophy"></i> Manage Battles
    </h1>
    <a href="{{ route('admin.battles.create') }}" class="btn btn-naval">
        <i class="bi bi-plus-circle"></i> Add New Battle
    </a>
</div>

<!-- ============================================ -->
<!-- FILTER / SEARCH SECTION                       -->
<!-- ============================================ -->
<div class="card-naval mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.battles.index') }}" id="filterForm">
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
                           placeholder="Battle name or location..."
                           value="{{ $filters['search'] ?? '' }}">
                </div>

                <!-- Date From -->
                <div class="col-md-3">
                    <label for="date_from" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-calendar-start"></i> Date From
                    </label>
                    <input type="date" 
                           name="date_from" 
                           id="date_from" 
                           class="form-control form-control-naval" 
                           value="{{ $filters['date_from'] ?? '' }}">
                </div>

                <!-- Date To -->
                <div class="col-md-3">
                    <label for="date_to" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-calendar-end"></i> Date To
                    </label>
                    <input type="date" 
                           name="date_to" 
                           id="date_to" 
                           class="form-control form-control-naval" 
                           value="{{ $filters['date_to'] ?? '' }}">
                </div>

            
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-naval">
                        <i class="bi bi-funnel"></i> Apply Filters
                    </button>
                    <a href="{{ route('admin.battles.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                    <span class="ms-3 text-muted" style="font-size: 0.9rem;">
                        <i class="bi bi-info-circle"></i> 
                        Found <strong>{{ $battles->total() }}</strong> battle(s)
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ============================================ -->
<!-- BATTLES TABLE                                -->
<!-- ============================================ -->
<div class="card-naval">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-naval mb-0">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th style="width: 80px;">Image</th>
                        <th>Name</th>
                        <th style="width: 120px;">Date</th>
                        <th>Location</th>
                        <th style="width: 70px; text-align: center;">Ships</th>
                        <th style="width: 180px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($battles as $battle)
                        <tr>
                            <td>{{ $battle->id }}</td>
                            <td>
                                @if($battle->image_url)
                                    <img src="{{ $battle->image_url }}" width="50" height="40" style="object-fit: cover; border-radius: 6px;">  
                                @else
                                    <span class="text-muted" style="font-size: 0.75rem;">No image</span>
                                @endif
                            </td>
                            <td><strong>{{ $battle->name }}</strong></td>
                            <td>{{ $battle->battle_date->format('Y-m-d') }}</td>
                            <td>{{ $battle->battle_site }}</td>
                            <td style="text-align: center;">
                                <span class="badge" style="background: #1a3a5c; color: white; padding: 4px 10px; border-radius: 12px;">
                                    {{ $battle->ships->count() }}
                                </span>
                            </td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.battles.show', $battle) }}" class="btn btn-sm btn-info" title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.battles.edit', $battle) }}" class="btn btn-sm btn-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.battles.destroy', $battle) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this battle?')" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                <i class="bi bi-trophy" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
                                No battles found matching your criteria
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
   {{ $battles->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
</div>

<style>
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

    .btn-outline-secondary {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        padding: 10px 24px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-outline-secondary:hover {
        background: #1a3a5c;
        color: white;
        transform: translateY(-2px);
    }

    .btn-sm {
        padding: 4px 10px;
        border-radius: 6px;
    }

    .btn-group {
        gap: 4px;
    }
    .btn-group .btn {
        border-radius: 6px !important;
    }

    .table-naval thead th {
        padding: 12px 16px;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
    }
    .table-naval tbody td {
        padding: 12px 16px;
        vertical-align: middle;
        border-bottom: 1px solid #f1f5f9;
    }
    .table-naval tbody tr:hover {
        background: #f8fafc;
    }

    .card-naval {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

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
        .btn-naval {
            padding: 8px 16px;
            font-size: 0.85rem;
        }
        .form-control-naval,
        .form-select-naval {
            font-size: 0.85rem;
        }
    }
</style>
@endsection