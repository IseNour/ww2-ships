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
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Battle Name *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name') }}" required
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
                               value="{{ old('battle_date') }}" required
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
                       value="{{ old('battle_site') }}" required
                       style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                @error('battle_site')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                          rows="4" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Battle Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" 
                       accept="image/*" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">Upload a battle image (JPEG, PNG, GIF, WEBP - max 2MB)</small>
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <!-- ============================================ -->
            <!-- PARTICIPATING SHIPS - WITH BATTLE_RESULT & SHIP_STATUS -->
            <!-- ============================================ -->
            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Participating Ships</label>
                <div style="max-height: 400px; overflow-y: auto; border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 16px;">
                    @foreach($ships as $ship)
                        <div class="row mb-2 align-items-center ship-row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" name="ships[]" value="{{ $ship->id }}" 
                                           class="form-check-input ship-checkbox" 
                                           id="ship_{{ $ship->id }}">
                                    <label class="form-check-label" for="ship_{{ $ship->id }}">
                                        {{ $ship->name }} 
                                        <small class="text-muted" style="color: var(--text-secondary, #5e6b72); display: block; font-size: 0.7rem;">
                                            {{ $ship->class->name }} - {{ $ship->class->country->name }}
                                        </small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select name="battle_results[{{ $ship->id }}]" class="form-select form-select-sm battle-result-select" style="display: none;">
                                    <option value="">Select Result</option>
                                    <option value="Victory">Victory</option>
                                    <option value="Defeat">Defeat</option>
                                    <option value="Draw">Draw</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="ship_status[{{ $ship->id }}]" class="form-select form-select-sm ship-status-select" style="display: none;">
                                    <option value="">Select Status</option>
                                    <option value="Undamaged">Undamaged</option>
                                    <option value="Lightly Damaged">Lightly Damaged</option>
                                    <option value="Damaged">Damaged</option>
                                    <option value="Heavily Damaged">Heavily Damaged</option>
                                    <option value="Sunk">Sunk</option>
                                    <option value="Scuttled">Scuttled</option>
                                </select>
                            </div>
                        </div>
                    @endforeach
                </div>
                <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">Select ships and choose their battle result and status.</small>
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
            const row = this.closest('.ship-row');
            const resultSelect = row.querySelector('.battle-result-select');
            const statusSelect = row.querySelector('.ship-status-select');
            
            if (this.checked) {
                resultSelect.style.display = 'block';
                statusSelect.style.display = 'block';
            } else {
                resultSelect.style.display = 'none';
                statusSelect.style.display = 'none';
                resultSelect.value = '';
                statusSelect.value = '';
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