<div class="mb-3">
    <label class="form-label">
        {{ $label ?? ucwords(str_replace('_', ' ', $name)) }}
        @if ($attributes->has('required'))
            <sup class="text-danger">*</sup>
        @endif
    </label>
    <input
        type="text"
        class="form-control"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        {{ $attributes }}
    >
    @error($name)
        <p class="text-danger mt-1 small">
            {{ $message }}
        </p>
    @enderror
</div>