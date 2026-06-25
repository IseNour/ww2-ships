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
                        <th style="width: 120px; text-align: center;">Type</th>
                        <th style="width: 180px; text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ships as $ship)
                        <tr>
                            <td>{{ $ship->id }}</td>
                            <td><strong>{{ $ship->name }}</strong></td>
                            <td>{{ $ship->class->name ?? 'N/A' }}</td>
                            <td>{{ $ship->class->country->name ?? 'N/A' }}</td>
                            <td style="text-align: center;">
                                @if($ship->is_aircraft_carrier)
                                    <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 4px 12px; border-radius: 12px;">
                                        ✈️ Carrier
                                    </span>
                                @else
                                    <span class="badge" style="background: #1a3a5c; color: white; padding: 4px 12px; border-radius: 12px;">
                                        Ship
                                    </span>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('admin.ships.show', $ship) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.ships.edit', $ship) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.ships.destroy', $ship) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this ship?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No ships found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $ships->links('vendor.pagination.bootstrap-5') }}
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
    }
    .table-naval tbody td {
        padding: 12px 16px;
        vertical-align: middle;
    }
    .card-naval {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    /* ============================================ */
    /* PAGINATION STYLING                           */
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

    /* Results text styling */
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