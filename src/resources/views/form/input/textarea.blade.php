<div class="mb-3">
    <label class="form-label">
        {{ $label ?? ucwords(str_replace('_', ' ', $name)) }}
        @if ($attributes->has('required'))
            <sup class="text-danger">*</sup>
        @endif
    </label>
    <textarea
        class="form-control"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        rows="5"
        {{ $attributes }}
    >{{ $slot }}</textarea>
    @error($name)
        <p class="text-danger mt-1 small">
            {{ $message }}
        </p>
    @enderror
</div>