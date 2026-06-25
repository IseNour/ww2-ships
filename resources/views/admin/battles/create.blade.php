@extends('admin.layouts.admin')

@section('title', 'Add New Battle')

@section('content')
<div class="card-naval" style="max-width: 900px; margin: 0 auto;">
    <div class="card-header">
        <i class="bi bi-plus-circle"></i> Add New Battle
    </div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.battles.store') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">Battle Name *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name') }}" required
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #1a3a5c;">Battle Date *</label>
                        <input type="date" name="battle_date" class="form-control @error('battle_date') is-invalid @enderror" 
                               value="{{ old('battle_date') }}" required
                               style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                        @error('battle_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: #1a3a5c;">Location *</label>
                <input type="text" name="battle_site" class="form-control @error('battle_site') is-invalid @enderror" 
                       value="{{ old('battle_site') }}" required
                       style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                @error('battle_site')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: #1a3a5c;">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                          rows="4" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: #1a3a5c;">Battle Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" 
                       accept="image/*" style="border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 10px 16px;">
                <small class="text-muted" style="color: #5e6b72;">Upload a battle image (JPEG, PNG, GIF, WEBP - max 2MB)</small>
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: #1a3a5c;">Participating Ships</label>
                <div style="max-height: 300px; overflow-y: auto; border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 10px; padding: 16px;">
                    @foreach($ships as $ship)
                        <div class="form-check mb-2">
                            <input type="checkbox" name="ships[]" value="{{ $ship->id }}" 
                                   class="form-check-input ship-checkbox" 
                                   id="ship_{{ $ship->id }}">
                            <label class="form-check-label" for="ship_{{ $ship->id }}">
                                {{ $ship->name }} 
                                <small class="text-muted" style="color: #5e6b72;">({{ $ship->class->name }} - {{ $ship->class->country->name }})</small>
                            </label>
                            <input type="text" name="results[]" class="form-control form-control-sm mt-1 result-input" 
                                   placeholder="Result (Victory, Sunk, etc.)" style="display: none; width: 200px; border: 2px solid rgba(26, 58, 92, 0.1); border-radius: 8px; padding: 4px 10px;">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex gap-3 mt-4">
                <button type="submit" class="btn btn-naval">
                    <i class="bi bi-save"></i> Create Battle
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
        color: #1a3a5c;
        border: 2px solid #1a3a5c;
        padding: 10px 24px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-naval-outline:hover {
        background: #1a3a5c;
        color: white;
    }
    .card-naval {
        background: white;
        border-radius: 16px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
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