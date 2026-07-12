@extends('admin.layouts.admin')

@section('title', $ship->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <div class="card-naval">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span style="font-size: 1.2rem;">
                        <i class="bi bi-ship"></i> <strong>{{ $ship->name }}</strong>
                    </span>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.ships.edit', $ship) }}" class="btn btn-sm btn-warning text-white">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.ships.destroy', $ship) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this ship?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <!-- Ship Details -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Class</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-tag" style="color: #2e89a8;"></i> {{ $ship->class->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Country</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-flag" style="color: #ccb250;"></i> {{ $ship->class->country->name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Type</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-info-circle" style="color: #2e89a8;"></i> {{ $ship->class->type->name ?? 'Unknown' }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                @if($ship->description)
                    <div class="mb-4 p-3 rounded-3" style="background: rgba(26, 58, 92, 0.03); border-left: 3px solid #1a3a5c;">
                        <p class="mb-0" style="color: #1a3a5c; line-height: 1.7;">{{ $ship->description }}</p>
                    </div>
                @endif

                @if($ship->fate)
                    <div class="mb-4 p-3 rounded-3" style="background: rgba(204, 178, 80, 0.06); border-left: 3px solid #ccb250;">
                        <p class="mb-0" style="color: #1a3a5c;"><strong style="color: #ccb250;">Fate:</strong> {{ $ship->fate }}</p>
                    </div>
                @endif

                <!-- Specifications -->
                <h6 class="mb-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                    <i class="bi bi-list-ul"></i> Specifications
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-sm table-borderless">
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Displacement</td><td style="color: #5e6b72;">{{ number_format($ship->displacement, 0) }} tons</td></tr>
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Length</td><td style="color: #5e6b72;">{{ $ship->length }} m</td></tr>
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Beam</td><td style="color: #5e6b72;">{{ $ship->beam }} m</td></tr>
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Draft</td><td style="color: #5e6b72;">{{ $ship->draft }} m</td></tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-sm table-borderless">
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Max Speed</td><td style="color: #5e6b72;">{{ $ship->max_speed }} knots</td></tr>
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Crew</td><td style="color: #5e6b72;">{{ number_format($ship->crew) }}</td></tr>
                            <tr>
    <td style="color: #1a3a5c; font-weight: 500;">Launch Date</td> <td style="color: #5e6b72;">
        @if($ship->launch_date)
            @if(strtotime($ship->launch_date))
                {{ date('F d, Y', strtotime($ship->launch_date)) }}
            @else
                {{ $ship->launch_date }}
            @endif
        @else
            N/A
        @endif
    </td>
</tr>
                            <tr><td style="color: #1a3a5c; font-weight: 500;">Commission Date</td><td style="color: #5e6b72;">
    @if($ship->commission_date)
        @if(strtotime($ship->commission_date))
            {{ date('F d, Y', strtotime($ship->commission_date)) }}
        @else
            {{ $ship->commission_date }}
        @endif
    @else
        N/A
    @endif
</td></tr>
                        </table>
                    </div>
                </div>

                <!-- Battles Participated -->
                @if($ship->battles->count() > 0)
                    <h6 class="mt-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                        <i class="bi bi-trophy"></i> Battles Participated ({{ $ship->battles->count() }})
                    </h6>
                    <div class="row g-2">
                        @foreach($ship->battles as $battle)
                            <div class="col-md-6">
                                <div class="p-2 rounded-3 d-flex justify-content-between align-items-center" 
                                     style="background: rgba(26, 58, 92, 0.04); border-left: 3px solid {{ $battle->pivot->result === 'Victory' ? '#2e89a8' : ($battle->pivot->result === 'Sunk' ? '#ccb250' : '#1a3a5c') }};">
                                    <div>
                                        <a href="{{ route('admin.battles.show', $battle) }}" style="color: #1a3a5c; text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                                            {{ $battle->name }}
                                        </a>
                                        <br>
                                        <small class="text-muted" style="color: #5e6b72 !important; font-size: 0.7rem;">
                                            {{ $battle->battle_date->format('Y') }}
                                        </small>
                                    </div>
                                    <span class="badge" style="background: {{ $battle->pivot->result === 'Victory' ? '#2e89a8' : ($battle->pivot->result === 'Sunk' ? '#ccb250' : '#5e6b72') }}; color: white; padding: 4px 10px; border-radius: 12px; font-size: 0.7rem;">
                                        {{ $battle->pivot->result }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Aircraft Complement -->
                @if($ship->is_aircraft_carrier && $ship->aircraftModels->count() > 0)
                    <h6 class="mt-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                        <i class="bi bi-airplane"></i> Aircraft Complement
                    </h6>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless">
                            <thead style="background: rgba(26, 58, 92, 0.04);">
                                <tr>
                                    <th style="color: #1a3a5c; font-weight: 600; font-size: 0.8rem;">Aircraft</th>
                                    <th style="color: #1a3a5c; font-weight: 600; font-size: 0.8rem;">Type</th>
                                    <th style="color: #1a3a5c; font-weight: 600; font-size: 0.8rem; text-align: center;">Qty</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ship->aircraftModels as $aircraft)
                                    <tr>
                                        <td style="color: #1a3a5c; font-weight: 500; font-size: 0.85rem;">{{ $aircraft->name }}</td>
                                        <td style="color: #5e6b72; font-size: 0.85rem;">{{ $aircraft->type->name }}</td>
                                        <td style="color: #5e6b72; font-size: 0.85rem; text-align: center;">{{ $aircraft->pivot->quantity }}</td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Images & Actions -->
    <div class="col-md-4">
        <!-- Gallery -->
        <div class="card-naval">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-images"></i> Gallery
            </div>
            <div class="card-body p-3">
                @if($ship->images->count() > 0)
                    @foreach($ship->images as $image)
                        <div class="mb-3">
                            <img src="{{ $image->image_url }}" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover; border: 2px solid rgba(26, 58, 92, 0.1);">
                            @if($image->caption)
                                <small class="text-muted" style="color: #5e6b72 !important; font-size: 0.8rem;">{{ $image->caption }}</small>
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="text-center py-3">
                        <i class="bi bi-image display-6" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important; font-size: 0.9rem;">No images uploaded</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Actions -->
        <div class="card-naval mt-3">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-gear"></i> Actions
            </div>
            <div class="card-body p-3">
                <a href="{{ route('admin.ships.edit', $ship) }}" class="btn btn-naval w-100 mb-2" style="padding: 8px;">
                    <i class="bi bi-pencil"></i> Edit Ship
                </a>
                <form action="{{ route('admin.ships.destroy', $ship) }}" method="POST" class="w-100">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn w-100 mb-2" style="background: transparent; color: #dc3545; border: 2px solid #dc3545; border-radius: 8px; padding: 8px;" onclick="return confirm('Delete this ship?')">
                        <i class="bi bi-trash"></i> Delete Ship
                    </button>
                </form>
                <a href="{{ route('admin.ships.index') }}" class="btn btn-naval-outline w-100" style="padding: 8px;">
                    <i class="bi bi-arrow-left"></i> Back to Ships
                </a>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="card-naval mt-3">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-speedometer2"></i> Quick Stats
            </div>
            <div class="card-body p-3">
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">ID</span>
                    <span style="color: #5e6b72; font-weight: 500;">#{{ $ship->id }}</span>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Created</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $ship->created_at->diffForHumans() }}</span>
                </div>
                <div class="d-flex justify-content-between py-2">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Updated</span>
                    <span style="color: #5e6b72; font-weight: 500;">{{ $ship->updated_at->diffForHumans() }}</span>
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