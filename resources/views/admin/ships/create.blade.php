@extends('admin.layouts.admin')

@section('title', 'Add New Ship')

@section('content')
<div class="card-naval" style="max-width: 1000px; margin: 0 auto;">
    <div class="card-header">
        <i class="bi bi-plus-circle"></i> Add New Ship
    </div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.ships.store') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Ship Name *</label>
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
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Class *</label>
                        <select name="class_id" class="form-select @error('class_id') is-invalid @enderror" required
                                style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                            <option value="">Select Class</option>
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}" {{ old('class_id') == $class->id ? 'selected' : '' }}>
                                    {{ $class->name }} ({{ $class->country->name }})
                                </option>
                            @endforeach
                        </select>
                        @error('class_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- ============================================ -->
            <!-- OPERATOR COUNTRY - ADDED                     -->
            <!-- ============================================ -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">
                            <i class="bi bi-flag"></i> Operator Country
                        </label>
                        <select name="operator_country_id" class="form-select @error('operator_country_id') is-invalid @enderror"
                                style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                            <option value="">Same as Class Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ old('operator_country_id') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </select>
                        <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">
                            <i class="bi bi-info-circle"></i> 
                            Select if this ship was operated by a different country than its class (e.g., HMNZS Achilles operated by New Zealand, but its class is British Leander-class).
                        </small>
                        @error('operator_country_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Launch Date</label>
                        <input type="date" name="launch_date" class="form-control @error('launch_date') is-invalid @enderror" 
                               value="{{ old('launch_date') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('launch_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Commission Date</label>
                        <input type="date" name="commission_date" class="form-control @error('commission_date') is-invalid @enderror" 
                               value="{{ old('commission_date') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('commission_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Displacement (tons)</label>
                        <input type="number" step="0.01" name="displacement" class="form-control @error('displacement') is-invalid @enderror" 
                               value="{{ old('displacement') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('displacement')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Length (m)</label>
                        <input type="number" step="0.01" name="length" class="form-control @error('length') is-invalid @enderror" 
                               value="{{ old('length') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('length')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Beam (m)</label>
                        <input type="number" step="0.01" name="beam" class="form-control @error('beam') is-invalid @enderror" 
                               value="{{ old('beam') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('beam')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Draft (m)</label>
                        <input type="number" step="0.01" name="draft" class="form-control @error('draft') is-invalid @enderror" 
                               value="{{ old('draft') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('draft')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Max Speed (knots)</label>
                        <input type="number" step="0.01" name="max_speed" class="form-control @error('max_speed') is-invalid @enderror" 
                               value="{{ old('max_speed') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('max_speed')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Crew</label>
                        <input type="number" name="crew" class="form-control @error('crew') is-invalid @enderror" 
                               value="{{ old('crew') }}"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('crew')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Fate</label>
                        <input type="text" name="fate" class="form-control @error('fate') is-invalid @enderror" 
                               value="{{ old('fate') }}" placeholder="e.g., Museum ship, Sunk in 1945"
                               style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                        @error('fate')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" 
                          rows="3" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" name="is_aircraft_carrier" class="form-check-input" 
                           id="isCarrier" value="1" {{ old('is_aircraft_carrier') ? 'checked' : '' }}>
                    <label class="form-check-label" for="isCarrier">
                        <i class="bi bi-airplane"></i> This is an Aircraft Carrier
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Images</label>
                <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" 
                       multiple accept="image/*" style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">You can upload multiple images (JPEG, PNG, GIF, WEBP - max 2MB each)</small>
                @error('images')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Image Caption</label>
                <input type="text" name="caption" class="form-control" placeholder="Caption for the images"
                       style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
            </div>

            <!-- AIRCRAFT COMPLEMENT SECTION -->
            <div id="aircraftSection" style="display: none;">
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">
                        <i class="bi bi-airplane"></i> Aircraft Complement
                    </label>
                    <div style="max-height: 300px; overflow-y: auto; border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 16px;">
                        @foreach($aircraftModels as $aircraft)
                            <div class="row mb-2 align-items-center aircraft-row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input type="checkbox" name="aircraft[{{ $loop->index }}][model_id]" 
                                               value="{{ $aircraft->id }}" 
                                               class="form-check-input aircraft-checkbox" 
                                               id="aircraft_{{ $aircraft->id }}">
                                        <label class="form-check-label" for="aircraft_{{ $aircraft->id }}">
                                            {{ $aircraft->name }}
                                            <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">({{ $aircraft->type->name }})</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="number" name="aircraft[{{ $loop->index }}][quantity]" 
                                           class="form-control form-control-sm aircraft-quantity" 
                                           placeholder="Qty" style="display: none;">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">Check the aircraft carried by this ship. Enter quantity and year.</small>
                </div>
            </div>

            <div class="d-flex gap-3 mt-4">
                <button type="submit" class="btn btn-naval">
                    <i class="bi bi-save"></i> Create Ship
                </button>
                <a href="{{ route('admin.ships.index') }}" class="btn btn-naval-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('isCarrier').addEventListener('change', function() {
        const aircraftSection = document.getElementById('aircraftSection');
        if (this.checked) {
            aircraftSection.style.display = 'block';
        } else {
            aircraftSection.style.display = 'none';
            document.querySelectorAll('.aircraft-checkbox').forEach(function(checkbox) {
                checkbox.checked = false;
                const row = checkbox.closest('.row');
                row.querySelector('.aircraft-quantity').style.display = 'none';
                row.querySelector('.aircraft-quantity').value = '';
            });
        }
    });

    document.querySelectorAll('.aircraft-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const row = this.closest('.row');
            const quantity = row.querySelector('.aircraft-quantity');
            
            if (this.checked) {
                quantity.style.display = 'block';
            } else {
                quantity.style.display = 'none';
                quantity.value = '';
            }
        });
    });
</script>

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