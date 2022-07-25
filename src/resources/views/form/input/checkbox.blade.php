<div class="mb-3">
    <label class="form-check">
        <input
            type="checkbox"
            class="form-check-input"
            name="{{ $name }}"
            value="{{ $value }}"
            {{ $attributes }}
        />
        <span class="form-check-label">
            {{ $label ?? ucwords(str_replace('_', ' ', $name)) }}
            @if ($attributes->has('required'))
                <sup class="text-danger">*</sup>
            @endif
        </span>
    </label>
</div>