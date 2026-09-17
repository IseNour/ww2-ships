@extends('admin.layouts.admin')

@section('title', $battle->name)

@section('content')
<div class="row">
    <!-- Left Column - Main Content -->
    <div class="col-md-8">
        <div class="card-naval">
            @if($battle->image_url)
                <div style="height: 280px; overflow: hidden; position: relative;">
                    <img src="{{ $battle->image_url }}" class="w-100 h-100" alt="{{ $battle->name }}" style="object-fit: cover;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.6)); padding: 30px 24px 20px;">
                        <h3 style="color: white; font-family: 'Cinzel', serif; margin: 0; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                            <i class="bi bi-trophy"></i> {{ $battle->name }}
                        </h3>
                    </div>
                </div>
            @else
                <div class="card-header">
                    <span style="font-size: 1.2rem;">
                        <i class="bi bi-trophy"></i> <strong>{{ $battle->name }}</strong>
                    </span>
                </div>
            @endif

            <div class="card-body p-4">
                <!-- Battle Details - Clean Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Date</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-calendar3" style="color: #2e89a8;"></i> {{ $battle->battle_date->format('F d, Y') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Location</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-geo-alt" style="color: #ccb250;"></i> {{ $battle->battle_site }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 text-center" style="background: rgba(26, 58, 92, 0.06);">
                            <div style="color: #5e6b72; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px;">Total Ships</div>
                            <div style="color: #1a3a5c; font-weight: 600; font-size: 1rem; margin-top: 4px;">
                                <i class="bi bi-ship" style="color: #1a3a5c;"></i> {{ $battle->ships->count() }} ships
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                @if($battle->description)
                    <div class="mb-4 p-3 rounded-3" style="background: rgba(26, 58, 92, 0.03); border-left: 3px solid #1a3a5c;">
                        <p class="mb-0" style="color: #1a3a5c; line-height: 1.7;">{{ $battle->description }}</p>
                    </div>
                @endif

                <!-- Participating Ships -->
                <h6 class="mb-3" style="color: #1a3a5c; font-family: 'Cinzel', serif; font-size: 0.95rem;">
                    <i class="bi bi-ship"></i> Participating Ships ({{ $battle->ships->count() }})
                </h6>

                @if($battle->ships->count() > 0)
                    <div class="row g-2">
                        @foreach($battle->ships as $ship)
                            @php
                                $battleResult = $ship->pivot->battle_result ?? 'Unknown';
                                $shipStatus = $ship->pivot->ship_status ?? null;

                                $resultColor = match($battleResult) {
                                    'Victory' => '#2e89a8',
                                    'Defeat' => '#c0392b',
                                    'Draw' => '#6c757d',
                                    default => '#1a3a5c'
                                };

                                $statusColor = match($shipStatus) {
                                    'Undamaged' => '#28a745',
                                    'Lightly Damaged' => '#90be6d',
                                    'Damaged' => '#fd7e14',
                                    'Heavily Damaged' => '#dc3545',
                                    'Sunk' => '#ccb250',
                                    'Scuttled' => '#8a782e',
                                    default => '#5e6b72'
                                };
                            @endphp

                            <div class="col-md-6">
                                <div class="p-2 rounded-3 d-flex justify-content-between align-items-center" 
                                     style="background: rgba(26, 58, 92, 0.04); border-left: 3px solid {{ $resultColor }};">

                                    <div>
                                        <a href="{{ route('admin.ships.show', $ship) }}" style="color: #1a3a5c; text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                                            {{ $ship->name }}
                                        </a>
                                        <br>
                                        <small class="text-muted" style="color: #5e6b72 !important; font-size: 0.7rem;">
                                            {{ $ship->class->name ?? 'Unknown Class' }} • {{ $ship->class->country->name ?? 'Unknown' }}
                                        </small>
                                        @if($shipStatus)
                                            <br>
                                            <span class="badge" style="background: {{ $statusColor }}; color: white; padding: 2px 8px; border-radius: 10px; font-size: 0.6rem;">
                                                {{ $shipStatus }}
                                            </span>
                                        @endif
                                    </div>

                                    <span class="badge" style="background: {{ $resultColor }}; color: white; padding: 4px 10px; border-radius: 12px; font-size: 0.7rem;">
                                        {{ $battleResult }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-4" style="background: rgba(26, 58, 92, 0.03); border-radius: 12px;">
                        <i class="bi bi-ship display-6" style="color: #c5d1e0;"></i>
                        <p class="text-muted mt-2" style="color: #5e6b72 !important; font-size: 0.9rem;">No ships recorded for this battle.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Right Column - Sidebar -->
    <div class="col-md-4">
        <!-- Quick Stats -->
        <div class="card-naval">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-speedometer2"></i> Quick Stats
            </div>
            <div class="card-body p-3">
                @php
                    $victories = $battle->ships->where('pivot.battle_result', 'Victory')->count();
                    $defeats = $battle->ships->where('pivot.battle_result', 'Defeat')->count();
                    $draws = $battle->ships->where('pivot.battle_result', 'Draw')->count();

                    $undamaged = $battle->ships->where('pivot.ship_status', 'Undamaged')->count();
                    $lightlyDamaged = $battle->ships->where('pivot.ship_status', 'Lightly Damaged')->count();
                    $damaged = $battle->ships->where('pivot.ship_status', 'Damaged')->count();
                    $heavilyDamaged = $battle->ships->where('pivot.ship_status', 'Heavily Damaged')->count();
                    $sunk = $battle->ships->where('pivot.ship_status', 'Sunk')->count();
                    $scuttled = $battle->ships->where('pivot.ship_status', 'Scuttled')->count();
                @endphp

                <!-- Basic Info -->
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Total Ships</span>
                    <span style="color: #1a3a5c; font-weight: 600;">{{ $battle->ships->count() }}</span>
                </div>

                <!-- Battle Results -->
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Victories</span>
                    <span style="color: #2e89a8; font-weight: 600;">{{ $victories }}</span>
                </div>

                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Defeats</span>
                    <span style="color: #c0392b; font-weight: 600;">{{ $defeats }}</span>
                </div>

                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Draws</span>
                    <span style="color: #6c757d; font-weight: 600;">{{ $draws }}</span>
                </div>

                <!-- Ship Status -->
                @if($undamaged > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Undamaged</span>
                    <span style="color: #28a745; font-weight: 600;">{{ $undamaged }}</span>
                </div>
                @endif

                @if($lightlyDamaged > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Lightly Damaged</span>
                    <span style="color: #90be6d; font-weight: 600;">{{ $lightlyDamaged }}</span>
                </div>
                @endif

                @if($damaged > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Damaged</span>
                    <span style="color: #fd7e14; font-weight: 600;">{{ $damaged }}</span>
                </div>
                @endif

                @if($heavilyDamaged > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Heavily Damaged</span>
                    <span style="color: #dc3545; font-weight: 600;">{{ $heavilyDamaged }}</span>
                </div>
                @endif

                @if($sunk > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Sunk</span>
                    <span style="color: #ccb250; font-weight: 600;">{{ $sunk }}</span>
                </div>
                @endif

                @if($scuttled > 0)
                <div class="d-flex justify-content-between py-2 border-bottom" style="border-color: rgba(26, 58, 92, 0.06) !important;">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Scuttled</span>
                    <span style="color: #8a782e; font-weight: 600;">{{ $scuttled }}</span>
                </div>
                @endif

                <div class="d-flex justify-content-between py-2">
                    <span style="color: #1a3a5c; font-size: 0.85rem;">Battle ID</span>
                    <span style="color: #5e6b72; font-weight: 600;">#{{ $battle->id }}</span>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="card-naval mt-3">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-gear"></i> Actions
            </div>
            <div class="card-body p-3">
                <a href="{{ route('admin.battles.edit', $battle) }}" class="btn btn-naval w-100 mb-2" style="padding: 8px;">
                    <i class="bi bi-pencil"></i> Edit Battle
                </a>
                <form action="{{ route('admin.battles.destroy', $battle) }}" method="POST" class="w-100">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn w-100 mb-2" style="background: transparent; color: #dc3545; border: 2px solid #dc3545; border-radius: 8px; padding: 8px;" onclick="return confirm('Delete this battle?')">
                        <i class="bi bi-trash"></i> Delete Battle
                    </button>
                </form>
                <a href="{{ route('admin.battles.index') }}" class="btn btn-naval-outline w-100" style="padding: 8px;">
                    <i class="bi bi-arrow-left"></i> Back to Battles
                </a>
            </div>
        </div>

        <!-- Timeline -->
        <div class="card-naval mt-3">
            <div class="card-header" style="padding: 10px 16px;">
                <i class="bi bi-clock-history"></i> Timeline
            </div>
            <div class="card-body text-center p-3">
                <div style="color: #1a3a5c; font-size: 2.2rem; font-family: 'Cinzel', serif; font-weight: 700;">
                    {{ $battle->battle_date->format('Y') }}
                </div>
                <div style="color: #5e6b72; font-size: 0.9rem;">{{ $battle->battle_date->format('F d') }}</div>
                <div class="naval-divider my-2"></div>
                <div style="color: #1a3a5c; font-weight: 600; font-size: 0.95rem;">{{ $battle->battle_site }}</div>
            </div>
        </div>
    </div>
</div>

<style>
    .naval-divider {
        height: 2px;
        width: 50%;
        margin: 8px auto;
        background: linear-gradient(90deg, transparent, #1a3a5c, #2e89a8, #1a3a5c, transparent);
        border-radius: 100px;
    }
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