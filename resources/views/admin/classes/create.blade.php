@extends('admin.layouts.admin')

@section('title', 'Add New Ship Class')

@section('content')
<div class="card-naval" style="max-width: 700px; margin: 0 auto;">
    <div class="card-header">
        <i class="bi bi-plus-circle"></i> Add New Ship Class
    </div>
    <div class="card-body p-4">
        <form method="POST" action="{{ route('admin.classes.store') }}">
            @csrf
            
            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Class Name *</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" required placeholder="e.g., Benson, Fletcher, Gearing"
                       style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                <small class="text-muted" style="color: var(--text-secondary, #5e6b72);">Enter the ship class name (e.g., "Benson", "Fletcher")</small>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Country *</label>
                <select name="country_id" class="form-select @error('country_id') is-invalid @enderror" required
                        style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
                @error('country_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold" style="color: var(--text-primary, #1a3a5c);">Ship Type *</label>
                <select name="type_id" class="form-select @error('type_id') is-invalid @enderror" required
                        style="border: 2px solid var(--border-color, rgba(26,58,92,0.1)); border-radius: 10px; padding: 10px 16px;">
                    <option value="">Select Ship Type</option>
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
                @error('type_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex gap-3">
                <button type="submit" class="btn btn-naval">
                    <i class="bi bi-save"></i> Create Class
                </button>
                <a href="{{ route('admin.classes.index') }}" class="btn btn-naval-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>

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