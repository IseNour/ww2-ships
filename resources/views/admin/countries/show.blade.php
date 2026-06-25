@extends('admin.layouts.admin')

@section('title', $country->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <div class="card-naval">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span style="font-size: 1.2rem;">
                        <i class="bi bi-flag"></i> <strong>{{ $country->name }}</strong>
                    </span>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-sm btn-warning text-white">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.countries.destroy', $country) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this country?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <!-- Country Details -->
                <div class="row g-3 mb-4">
                    <div class="col-md-12 text-center">
                        @if($country->flag)
                            <div class="p-3 rounded-3" style="background: rgba(26, 58, 92, 0.06); display: inline-block; padding: 20px 40px;">
                                <img src="{{ asset('storage/flags/' . $country->flag) }}" 
                                     width="120" alt="{{ $country->name }}" style="border-radius: 8px; border: 2px solid rgba(26,58,92,0.1);">
                            </div>
                        @else
                            <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                                <i class="bi bi-flag display-4" style="color: #c5d1e0;"></i>
                                <p class="text-muted mt-2" style="color: #5e6b72 !important;">No flag uploaded</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Ship Classes</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1.8rem; font-family: 'Cinzel', serif;">
                                {{ $country->shipClasses->count() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(204, 178, 80, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Aircraft Models</div>
                            <div style="color: #ccb250; font-weight: 600; font-size: 1.8rem; font-family: 'Cinzel', serif;">
                                {{ $country->aircraftModels->count() }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ship Classes List -->
                <h6 class="mb-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                    <i class="bi bi-ship"></i> Ship Classes ({{ $country->shipClasses->count() }})
                </h6>

                @if($country->shipClasses->count() > 0)
                    <div class="row g-2">
                        @foreach($country->shipClasses as $class)
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 d-flex justify-content-between align-items-center" 
                                     style="background: rgba(26, 58, 92, 0.04); border-left: 3px solid #1a3a5c;">
                                    <div>
                                        <a href="{{ route('admin.ships.index') }}?class={{ $class->id }}" style="color: #1a3a5c; text-decoration: none; font-weight: 500;">
                                            {{ $class->name }}
                                        </a>
                                        <br>
                                        <small class="text-muted" style="color: #5e6b72 !important; font-size: 0.75rem;">
                                            {{ $class->ships->count() }} ships
                                        </small>
                                    </div>
                                    <span class="badge" style="background: #1a3a5c; color: white; padding: 4px 10px; border-radius: 12px; font-size: 0.7rem;">
                                        {{ $class->ships->count() }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-4" style="background: rgba(26, 58, 92, 0.03); border-radius: 12px;">
                        <i class="bi bi-ship display-6" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important; font-size: 0.9rem;">No ship classes for this country</p>
                    </div>
                @endif

                <!-- Aircraft Models List -->
                <h6 class="mt-4 mb-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                    <i class="bi bi-airplane"></i> Aircraft Models ({{ $country->aircraftModels->count() }})
                </h6>

                @if($country->aircraftModels->count() > 0)
                    <div class="row g-2">
                        @foreach($country->aircraftModels as $aircraft)
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 d-flex justify-content-between align-items-center" 
                                     style="background: rgba(204, 178, 80, 0.04); border-left: 3px solid #ccb250;">
                                    <div>
                                        <span style="color: #1a3a5c; font-weight: 500;">{{ $aircraft->name }}</span>
                                        <br>
                                        <small class="text-muted" style="color: #5e6b72 !important; font-size: 0.75rem;">
                                            {{ $aircraft->type->name ?? 'Unknown' }}
                                        </small>
                                    </div>
                                    @if($aircraft->introduced)
                                        <span class="badge" style="background: #2e89a8; color: white; padding: 4px 10px; border-radius: 12px; font-size: 0.7rem;">
                                            {{ $aircraft->introduced->format('Y') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-4" style="background: rgba(204, 178, 80, 0.03); border-radius: 12px;">
                        <i class="bi bi-airplane display-6" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important; font-size: 0.9rem;">No aircraft models for this country</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Sidebar -->
    <div class="col-md-4">
        <!-- Actions -->
        <div class="card-naval">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-gear"></i> Actions
            </div>
            <div class="card-body p-3">
                <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-naval w-100 mb-2" style="padding: 8px;">
                    <i class="bi bi-pencil"></i> Edit Country
                </a>
                <form action="{{ route('admin.countries.destroy', $country) }}" method="POST" class="w-100">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn w-100 mb-2" style="background: transparent; color: #dc3545; border: 2px solid #dc3545; border-radius: 8px; padding: 8px;" onclick="return confirm('Delete this country?')">
                        <i class="bi bi-trash"></i> Delete Country
                    </button>
                </form>
                <a href="{{ route('admin.countries.index') }}" class="btn btn-naval-outline w-100" style="padding: 8px;">
                    <i class="bi bi-arrow-left"></i> Back to Countries
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="card-naval mt-3">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-info-circle"></i> Quick Stats
            </div>
            <div class="card-body p-3">
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Ship Classes</span>
                    <span style="color: #1a3a5c; font-weight: 600;">{{ $country->shipClasses->count() }}</span>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Aircraft Models</span>
                    <span style="color: #1a3a5c; font-weight: 600;">{{ $country->aircraftModels->count() }}</span>
                </div>
                <div class="d-flex justify-content-between py-2">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Country ID</span>
                    <span style="color: #5e6b72; font-weight: 500;">#{{ $country->id }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-naval {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .btn-naval:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(26, 58, 92, 0.3);
        color: white;
    }
    .btn-naval-outline {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .btn-naval-outline:hover {
        background: #1a3a5c;
        color: white;
    }
    .btn-sm {
        padding: 4px 12px;
        border-radius: 6px;
        font-size: 0.8rem;
    }
    .card-naval {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }
    .card-naval .card-header {
        background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%);
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 12px 20px;
        font-family: 'Cinzel', serif;
        font-size: 0.95rem;
    }
    .card-naval .card-header i {
        margin-right: 8px;
    }
    .card-body {
        padding: 16px 20px;
    }
</style>
@endsection