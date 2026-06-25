@extends('admin.layouts.admin')

@section('title', $class->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <div class="card-naval">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span style="font-size: 1.2rem;">
                        <i class="bi bi-tags"></i> <strong>{{ $class->name }}</strong>
                    </span>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.classes.edit', $class) }}" class="btn btn-sm btn-warning text-white">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.classes.destroy', $class) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this class?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <!-- Class Details -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05);">
                            <div style="color: #5e6b72; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.5px;">Country</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1.1rem;">
                                <i class="bi bi-flag"></i> {{ $class->country->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05);">
                            <div style="color: #5e6b72; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.5px;">Ship Type</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1.1rem;">
                                <i class="bi bi-tag"></i> {{ $class->type->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3" style="background: rgba(26, 58, 92, 0.05);">
                            <div style="color: #5e6b72; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.5px;">Total Ships</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1.1rem;">
                                <i class="bi bi-ship"></i> {{ $class->ships->count() }} ships
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ships List -->
                <h6 class="mb-3" style="color: #1a3a5c; font-family: 'Cinzel', serif;">
                    <i class="bi bi-ship"></i> Ships in this class ({{ $class->ships->count() }})
                </h6>

                @if($class->ships->count() > 0)
                    <div class="row g-2">
                        @foreach($class->ships as $ship)
                            <div class="col-md-6">
                                <div class="p-3 rounded-3 d-flex justify-content-between align-items-center" 
                                     style="background: rgba(26, 58, 92, 0.05); border-left: 4px solid #1a3a5c;">
                                    <div>
                                        <a href="{{ route('admin.ships.show', $ship) }}" style="color: #1a3a5c; text-decoration: none; font-weight: 500;">
                                            {{ $ship->name }}
                                        </a>
                                        @if($ship->launch_date)
                                            <br>
                                            <small class="text-muted" style="color: #5e6b72 !important;">
                                                <i class="bi bi-calendar"></i> {{ $ship->launch_date->format('Y') }}
                                            </small>
                                        @endif
                                    </div>
                                    <a href="{{ route('admin.ships.show', $ship) }}" class="btn btn-sm btn-naval">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-4" style="background: rgba(26, 58, 92, 0.03); border-radius: 12px;">
                        <i class="bi bi-ship display-6" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important;">No ships in this class yet.</p>
                        <a href="{{ route('admin.ships.create') }}" class="btn btn-sm btn-naval">
                            <i class="bi bi-plus-circle"></i> Add First Ship
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Sidebar -->
    <div class="col-md-4">
        <!-- Actions Card -->
        <div class="card-naval">
            <div class="card-header">
                <i class="bi bi-gear"></i> Quick Actions
            </div>
            <div class="card-body p-3">
                <a href="{{ route('admin.classes.edit', $class) }}" class="btn btn-naval w-100 mb-2">
                    <i class="bi bi-pencil"></i> Edit Class
                </a>
                <a href="{{ route('admin.ships.create') }}" class="btn btn-naval w-100 mb-2">
                    <i class="bi bi-plus-circle"></i> Add Ship to this Class
                </a>
                <a href="{{ route('admin.classes.index') }}" class="btn btn-naval-outline w-100">
                    <i class="bi bi-arrow-left"></i> Back to Classes
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="card-naval mt-3">
            <div class="card-header">
                <i class="bi bi-speedometer2"></i> Quick Stats
            </div>
            <div class="card-body p-3">
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Class Name</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $class->name }}</span>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Country</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $class->country->name }}</span>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.05) !important;">
                    <span style="color: #1a3a5c;">Type</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $class->type->name }}</span>
                </div>
                <div class="d-flex justify-content-between py-2">
                    <span style="color: #1a3a5c;">Ships</span>
                    <span style="color: #5e6b72; font-weight: 500; font-family: 'Cinzel', serif;">{{ $class->ships->count() }}</span>
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
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .btn-naval:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
        color: white;
    }
    .btn-naval-outline {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .btn-naval-outline:hover {
        background: #1a3a5c;
        color: white;
    }
    .btn-sm {
        padding: 4px 12px;
        font-size: 0.8rem;
    }
</style>
@endsection