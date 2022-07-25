<div class="mb-3">
    <label class="form-label">
        {{ $label ?? ucwords(str_replace('_', ' ', $name)) }}
        @if ($attributes->has('required'))
            <sup class="text-danger">*</sup>
        @endif
    </label>
    <div
        class="input-group input-group-flat"
        x-data="{
            showPassword: false
        }"
    >
        <input
            x-bind:type="showPassword ? 'text' : 'password'"
            class="form-control"
            name="{{ $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            {{ $attributes }}
        >
        <span class="input-group-text">
            <a href="javascript:void(0)" x-on:click="showPassword = !showPassword" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="2" />
                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                </svg>
            </a>
        </span>
    </div>
    @error($name)
        <p class="text-danger mt-1 small">
            {{ $message }}
        </p>
    @enderror
</div>