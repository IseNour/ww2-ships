@extends('admin.layouts.admin')

@section('title', 'Manage Ships')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">
        <i class="bi bi-ship"></i> Manage Ships
    </h1>
    <a href="{{ route('admin.ships.create') }}" class="btn btn-naval">
        <i class="bi bi-plus-circle"></i> Add New Ship
    </a>
</div>

<!-- ============================================ -->
<!-- FILTER / SEARCH SECTION                       -->
<!-- ============================================ -->
<div class="card-naval mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.ships.index') }}" id="filterForm">
            <div class="row g-3">
                <!-- Search -->
                <div class="col-md-3 col-sm-6">
                    <label for="search" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-search"></i> Search
                    </label>
                    <input type="text" 
                           name="search" 
                           id="search" 
                           class="form-control form-control-naval" 
                           placeholder="Ship, class, or country..."
                           value="{{ $filters['search'] ?? '' }}">
                </div>

                <!-- Country Filter -->
                <div class="col-md-2 col-sm-6">
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
                <div class="col-md-2 col-sm-6">
                    <label for="type" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-tag"></i> Ship Type
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

                <!-- Carrier Filter -->
                <div class="col-md-2 col-sm-6">
                    <label for="carrier" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-airplane"></i> Aircraft Carrier
                    </label>
                    <select name="carrier" id="carrier" class="form-select form-select-naval">
                        <option value="">All Ships</option>
                        <option value="yes" {{ (isset($filters['carrier']) && $filters['carrier'] == 'yes') ? 'selected' : '' }}>
                            Yes
                        </option>
                        <option value="no" {{ (isset($filters['carrier']) && $filters['carrier'] == 'no') ? 'selected' : '' }}>
                            No
                        </option>
                    </select>
                </div>

                <!-- Sort -->
                <div class="col-md-2 col-sm-6">
                    <label for="sort" class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-arrow-up-down"></i> Sort By
                    </label>
                    <select name="sort" id="sort" class="form-select form-select-naval">
                        <option value="created_at" {{ (isset($filters['sort']) && $filters['sort'] == 'created_at') ? 'selected' : '' }}>
                            Date Added
                        </option>
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

                <!-- Order Buttons -->
                <div class="col-md-1 col-sm-6">
                    <label class="form-label fw-semibold" style="color: #1a3a5c; font-size: 0.85rem;">
                        <i class="bi bi-arrow-up"></i> Order
                    </label>
                    <div class="d-flex gap-1">
                        <button type="submit" name="order" value="asc" 
                                class="btn btn-outline-naval {{ (isset($filters['order']) && $filters['order'] == 'asc') ? 'active' : '' }}"
                                title="Ascending">
                            <i class="bi bi-sort-up"></i>
                        </button>
                        <button type="submit" name="order" value="desc" 
                                class="btn btn-outline-naval {{ (isset($filters['order']) && $filters['order'] == 'desc') ? 'active' : '' }}"
                                title="Descending">
                            <i class="bi bi-sort-down"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Action Buttons Row -->
            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-naval">
                        <i class="bi bi-funnel"></i> Apply Filters
                    </button>
                    <a href="{{ route('admin.ships.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                    <span class="ms-3 text-muted" style="font-size: 0.9rem;">
                        <i class="bi bi-info-circle"></i> 
                        Found <strong>{{ $ships->total() }}</strong> ship(s)
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- ============================================ -->
<!-- SHIP TABLE                                  -->
<!-- ============================================ -->
<div class="card-naval">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-naval mb-0">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Country</th>
                        <th style="width: 140px; text-align: center;">Type</th>
                        <th style="text-align: center;">Carrier</th>
                        <th style="width: 180px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ships as $ship)
                        <tr>
                            <td>{{ $ship->id }}</td>
                            <td><strong>{{ $ship->name }}</strong></td>
                            <td>{{ $ship->class->name ?? 'N/A' }}</td>
                            <td>
                                @if($ship->class && $ship->class->country)
                                    <span class="country-flag">{{ $ship->class->country->name }}</span>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <span class="badge" style="background: linear-gradient(135deg, #2e89a8 0%, #1a3a5c 100%); color: white; padding: 4px 12px; border-radius: 12px;">
                                    {{ $ship->class->type->name ?? 'Unknown' }}
                                </span>
                            </td>
                            <td style="text-align: center;">
                                @if($ship->is_aircraft_carrier)
                                    <span class="badge" style="background: #28a745; color: white; padding: 4px 10px; border-radius: 12px;">
                                        <i class="bi bi-check-circle"></i> Yes
                                    </span>
                                @else
                                    <span class="badge" style="background: #6c757d; color: white; padding: 4px 10px; border-radius: 12px;">
                                        No
                                    </span>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.ships.show', $ship) }}" class="btn btn-sm btn-info" title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.ships.edit', $ship) }}" class="btn btn-sm btn-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.ships.destroy', $ship) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this ship?')" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-5">
                                <i class="bi bi-ship" style="font-size: 2rem; display: block; margin-bottom: 10px;"></i>
                                No ships found matching your criteria
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
    {{ $ships->links('vendor.pagination.bootstrap-5') }}
</div>

<!-- ============================================ -->
<!-- STYLES                                      -->
<!-- ============================================ -->
<style>
    /* Naval Buttons */
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
        padding: 8px 14px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-outline-naval:hover {
        background: #1a3a5c;
        color: white;
        transform: translateY(-2px);
    }
    .btn-outline-naval.active {
        background: #1a3a5c;
        color: white;
        border-color: #1a3a5c;
    }

    /* Form Controls */
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

    /* Table */
    .btn-sm {
        padding: 4px 10px;
        border-radius: 6px;
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

    /* Country flag styling */
    .country-flag {
        display: inline-block;
        padding: 2px 10px;
        background: #f1f5f9;
        border-radius: 12px;
        font-size: 0.85rem;
    }

    /* Button group spacing */
    .btn-group {
        gap: 4px;
    }
    .btn-group .btn {
        border-radius: 6px !important;
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

    /* Responsive */
    @media (max-width: 768px) {
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