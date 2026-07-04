@extends('admin.layouts.admin')

@section('title', 'Edit Battle')

@section('content')
<div class="card-naval" style="max-width: 900px; margin: 0 auto;">
    <div class="card-header">
        <i class="bi bi-pencil"></i> Edit Battle: {{ $battle->name }}
    </div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.battles.update', $battle) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Battle Name *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name', $battle->name) }}" required
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Battle Date *</label>
                        <input type="date" name="battle_date" class="form-control @error('battle_date') is-invalid @enderror" 
                               value="{{ old('battle_date', $battle->battle_date->format('Y-m-d')) }}" required
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('battle_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Location *</label>
                <input type="text" name="battle_site" class="form-control @error('battle_site') is-invalid @enderror" 
                       value="{{ old('battle_site', $battle->battle_site) }}" required
                       style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                @error('battle_site')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                          rows="4" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">{{ old('description', $battle->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Current Image</label>
                @if($battle->image_url)
                    <div class="mb-2">
                        <img src="{{ $battle->image_url }}" width="200" style="border-radius: 10px; border: 2px solid var(--border-color, rgba(26,58,92,0.1));">
                    </div>
                @else
                    <p class="text-muted" style="color: var(--text-secondary, #5e6b72);">No image uploaded</p>
                @endif
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Upload New Image (optional)</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" 
                       accept="image/*" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">Upload a new image to replace the current one (JPEG, PNG, GIF, WEBP - max 2MB)</small>
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

           <div class="mb-3">
    <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Participating Ships</label>
    <div style="max-height: 300px; overflow-y: auto; border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 16px;">
        @foreach($ships as $ship)
            @php
                $pivot = $battle->ships->where('id', $ship->id)->first();
            @endphp
            <div class="form-check mb-2">
                <input type="checkbox" name="ships[]" value="{{ $ship->id }}" 
                       class="form-check-input ship-checkbox" 
                       id="ship_{{ $ship->id }}"
                       {{ $pivot ? 'checked' : '' }}>
                <label class="form-check-label" for="ship_{{ $ship->id }}">
                    {{ $ship->name }} 
                    <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">({{ $ship->class->name }} - {{ $ship->class->country->name }})</small>
                </label>
                <!-- CHANGED: Use ship ID as array key for results -->
                <input type="text" name="results[{{ $ship->id }}]" class="form-control form-control-sm mt-1 result-input" 
                       placeholder="Result (Victory, Sunk, etc.)" 
                       value="{{ $pivot ? $pivot->pivot->result : '' }}"
                       style="{{ $pivot ? 'display: block;' : 'display: none;' }} width: 200px; border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 8px; padding: 4px 10px;">
            </div>
        @endforeach
    </div>
</div>

            <div class="d-flex gap-3 mt-4">
                <button type="submit" class="btn btn-naval">
                    <i class="bi bi-save"></i> Update Battle
                </button>
                <a href="{{ route('admin.battles.index') }}" class="btn btn-naval-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('.ship-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const resultInput = this.closest('.form-check').querySelector('.result-input');
            if (this.checked) {
                resultInput.style.display = 'block';
            } else {
                resultInput.style.display = 'none';
                resultInput.value = '';
            }
        });
    });
</script>
@endpush

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
    .btn-naval-outline {
        background: transparent;
        color: var(--text-primary, #1a3a5c);
        border: 2px solid var(--text-primary, #1a3a5c);
        padding: 10px 24px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-naval-outline:hover {
        background: var(--text-primary, #1a3a5c);
        color: white;
    }
    .card-naval {
        background: var(--bg-card, white);
        border-radius: 16px;
        border: 1px solid var(--border-color, rgba(26,58,92,0.1));
        box-shadow: 0 2px 10px var(--shadow-color, rgba(0,0,0,0.05));
        overflow: hidden;
        transition: background 0.3s ease, border-color 0.3s ease;
    }
    .card-naval .card-header {
        background: linear-gradient(135deg, #1a3a5c 0%, #0e263a 100%);
        color: white;
        border-radius: 16px 16px 0 0;
        padding: 16px 24px;
        font-family: 'Cinzel', serif;
        font-size: 1.1rem;
    }
</style>
@endsection