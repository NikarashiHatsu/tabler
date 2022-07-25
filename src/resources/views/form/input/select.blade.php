<div class="mb-3">
    <label class="form-label">
        {{ $label ?? ucwords(str_replace('_', ' ', $name)) }}
        @if ($attributes->has('required'))
            <sup class="text-danger">*</sup>
        @endif
    </label>
    <select
        class="form-select"
        name="{{ $name }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </select>
    @error($name)
        <p class="text-danger mt-1 small">
            {{ $message }}
        </p>
    @enderror
</div>