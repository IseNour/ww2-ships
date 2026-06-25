@extends('layouts.app')

@section('title', 'Countries')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 style="font-family: 'Cinzel', serif; color: #1a3a5c;">🌍 Countries of World War II</h1>
</div>

<!-- Countries Grid -->
<div class="row">
    @forelse($countries as $country)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 16px; overflow: hidden; transition: all 0.3s ease;">
                <div class="card-body text-center">
                    <!-- Flag -->
                    <div class="mb-3">
                        @if($country->flag)
                            <img src="{{ asset('storage/flags/' . $country->flag) }}" 
                                 width="80" height="50" style="object-fit: cover; border-radius: 8px; border: 2px solid rgba(26, 58, 92, 0.1);" 
                                 alt="{{ $country->name }}">
                        @else
                            <div style="width: 80px; height: 50px; background: rgba(26, 58, 92, 0.1); border-radius: 8px; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-flag display-6 text-muted"></i>
                            </div>
                        @endif
                    </div>
                    
                    <h5 class="card-title" style="color: #1a3a5c; font-weight: 600;">{{ $country->name }}</h5>
                    
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <div>
                            <span class="badge" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; padding: 6px 14px; border-radius: 12px; font-size: 0.85rem;">
                                <i class="bi bi-ship"></i> {{ $country->ship_classes_count }} Classes
                            </span>
                        </div>
                        <div>
                            <span class="badge" style="background: linear-gradient(135deg, #ccb250 0%, #8a782e 100%); color: white; padding: 6px 14px; border-radius: 12px; font-size: 0.85rem;">
                                <i class="bi bi-airplane"></i> {{ $country->aircraft_models_count }} Aircraft
                            </span>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('countries.show', $country) }}" class="btn btn-sm" style="background: linear-gradient(135deg, #1a3a5c 0%, #2e89a8 100%); color: white; border: none; border-radius: 8px; padding: 8px 24px; transition: all 0.3s ease;">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert text-center py-5 border-0" style="background: rgba(26, 58, 92, 0.05); border-radius: 16px; color: #1a3a5c;">
                <i class="bi bi-flag display-4 d-block mb-3" style="color: #1a3a5c;"></i>
                <h4 style="font-family: 'Cinzel', serif; color: #1a3a5c;">No countries found</h4>
                <p style="color: #5e6b72;">Please check back later.</p>
            </div>
        </div>
    @endforelse
</div>

<style>
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 48px rgba(26, 58, 92, 0.15) !important;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(26, 58, 92, 0.3);
    }
</style>
@endsection