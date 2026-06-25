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
                                @if($battle->thumbnail)
                                    <img src="{{ $battle->thumbnail }}" width="50" height="40" style="object-fit: cover; border-radius: 6px;">  
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
                                <a href="{{ route('admin.battles.show', $battle) }}" class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('admin.battles.edit', $battle) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.battles.destroy', $battle) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this battle?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">No battles found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-4">
   {{ $battles->links('vendor.pagination.bootstrap-5') }}
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
</style>
@endsection