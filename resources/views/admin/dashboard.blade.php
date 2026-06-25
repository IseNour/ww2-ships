@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c; font-size: 2rem;">
            <i class="bi bi-speedometer2"></i> Dashboard
        </h1>
        <p class="text-muted" style="color: #5e6b72 !important; margin-top: 4px;">
            Welcome back, <strong style="color: #1a3a5c;">{{ Auth::user()->name }}</strong>!
        </p>
    </div>
    <span style="color: #5e6b72; font-size: 0.85rem;">
        <i class="bi bi-calendar3"></i> {{ now()->format('F d, Y') }}
    </span>
</div>

<!-- Stats Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="stat-number">{{ $stats['total_ships'] }}</div>
            <div class="stat-label"><i class="bi bi-compass"></i> Total Ships</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="border-left-color: #2e89a8;">
            <div class="stat-number">{{ $stats['carriers'] }}</div>
            <div class="stat-label"><i class="bi bi-airplane"></i> Aircraft Carriers</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="border-left-color: #ccb250;">
            <div class="stat-number">{{ $stats['total_battles'] }}</div>
            <div class="stat-label"><i class="bi bi-trophy"></i> Battles</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="border-left-color: #5e6b72;">
            <div class="stat-number">{{ $stats['total_users'] }}</div>
            <div class="stat-label"><i class="bi bi-people"></i> Users</div>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="card-naval">
            <div class="card-header">
                <i class="bi bi-clock-history"></i> Recently Added Ships
                <span class="badge" style="background: rgba(255,255,255,0.2); color: white; margin-left: 10px;">
                    {{ $stats['recent_ships']->count() }}
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" style="font-size: 0.9rem;">
                        <thead style="background: rgba(26, 58, 92, 0.04);">
                            <tr>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Name</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Class</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Country</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px; text-align: right;">Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($stats['recent_ships'] as $ship)
                                <tr>
                                    <td style="padding: 10px 16px;">
                                        <a href="{{ route('admin.ships.show', $ship) }}" style="color: #1a3a5c; font-weight: 500; text-decoration: none;">
                                            {{ $ship->name }}
                                        </a>
                                    </td>
                                    <td style="padding: 10px 16px; color: #5e6b72;">{{ $ship->class->name }}</td>
                                    <td style="padding: 10px 16px; color: #5e6b72;">{{ $ship->class->country->name }}</td>
                                    <td style="padding: 10px 16px; text-align: right; color: #5e6b72; font-size: 0.8rem;">
                                        {{ $ship->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center text-muted py-4">No ships added yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card-naval">
            <div class="card-header">
                <i class="bi bi-clock-history"></i> Recently Added Battles
                <span class="badge" style="background: rgba(255,255,255,0.2); color: white; margin-left: 10px;">
                    {{ $stats['recent_battles']->count() }}
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" style="font-size: 0.9rem;">
                        <thead style="background: rgba(26, 58, 92, 0.04);">
                            <tr>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Name</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Location</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px;">Date</th>
                                <th style="color: #1a3a5c; font-weight: 600; padding: 10px 16px; text-align: right;">Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($stats['recent_battles'] as $battle)
                                <tr>
                                    <td style="padding: 10px 16px;">
                                        <a href="{{ route('admin.battles.show', $battle) }}" style="color: #1a3a5c; font-weight: 500; text-decoration: none;">
                                            {{ $battle->name }}
                                        </a>
                                    </td>
                                    <td style="padding: 10px 16px; color: #5e6b72;">{{ $battle->battle_site }}</td>
                                    <td style="padding: 10px 16px; color: #5e6b72;">{{ $battle->battle_date->format('Y-m-d') }}</td>
                                    <td style="padding: 10px 16px; text-align: right; color: #5e6b72; font-size: 0.8rem;">
                                        {{ $battle->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center text-muted py-4">No battles added yet</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card-naval">
            <div class="card-header">
                <i class="bi bi-gear"></i> Quick Actions
            </div>
            <div class="card-body p-4">
                <!-- Primary Actions (Add) -->
                <div class="mb-3">
                    <label style="color: #5e6b72; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600; margin-bottom: 8px; display: block;">
                        <i class="bi bi-plus-circle"></i> Create New
                    </label>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('admin.ships.create') }}" class="btn btn-add">
                            <i class="bi bi-compass"></i> Add Ship
                        </a>
                        <a href="{{ route('admin.battles.create') }}" class="btn btn-add">
                            <i class="bi bi-trophy"></i> Add Battle
                        </a>
                        <a href="{{ route('admin.countries.create') }}" class="btn btn-add">
                            <i class="bi bi-flag"></i> Add Country
                        </a>
                        <a href="{{ route('admin.classes.create') }}" class="btn btn-add">
                            <i class="bi bi-tags"></i> Add Class
                        </a>
                    </div>
                </div>

                <!-- Secondary Actions (Manage) -->
                <div>
                    <label style="color: #5e6b72; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600; margin-bottom: 8px; display: block;">
                        <i class="bi bi-list"></i> Manage
                    </label>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('admin.ships.index') }}" class="btn btn-manage">
                            <i class="bi bi-compass"></i> Ships
                        </a>
                        <a href="{{ route('admin.battles.index') }}" class="btn btn-manage">
                            <i class="bi bi-trophy"></i> Battles
                        </a>
                        <a href="{{ route('admin.countries.index') }}" class="btn btn-manage">
                            <i class="bi bi-flag"></i> Countries
                        </a>
                        <a href="{{ route('admin.classes.index') }}" class="btn btn-manage">
                            <i class="bi bi-tags"></i> Classes
                        </a>
                        <a href="{{ route('home') }}" class="btn btn-manage" style="border-color: #5e6b72; color: #5e6b72;">
                            <i class="bi bi-house"></i> View Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Stats Cards */
    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 20px 24px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border-left: 4px solid #1a3a5c;
    }
    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(26, 58, 92, 0.12);
    }
    .stat-card .stat-number {
        font-size: 2.2rem;
        font-weight: 700;
        font-family: 'Cinzel', serif;
        color: #1a3a5c;
        line-height: 1.2;
    }
    .stat-card .stat-label {
        color: #5e6b72;
        font-size: 0.9rem;
        margin-top: 4px;
    }
    .stat-card .stat-label i {
        margin-right: 6px;
    }

    /* Card */
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
        padding: 14px 20px;
        font-family: 'Cinzel', serif;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }
    .card-naval .card-header i {
        margin-right: 10px;
    }
    .card-naval .card-body {
        padding: 0;
    }

    /* Tables */
    .table th,
    .table td {
        vertical-align: middle;
    }
    .table-hover tbody tr:hover {
        background: rgba(26, 58, 92, 0.03);
    }

    .badge {
        font-size: 0.7rem;
        padding: 2px 10px;
        border-radius: 12px;
    }

    /* Quick Action Buttons */
    .btn-add {
        background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        font-size: 0.85rem;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(26, 58, 92, 0.3);
        color: white;
    }

    .btn-manage {
        background: transparent;
        color: #1a3a5c;
        border: 2px solid rgba(26, 58, 92, 0.2);
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        font-size: 0.85rem;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }
    .btn-manage:hover {
        background: #1a3a5c;
        color: white;
        border-color: #1a3a5c;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(26, 58, 92, 0.2);
    }
    .btn-manage i {
        font-size: 0.9rem;
    }
</style>
@endsection