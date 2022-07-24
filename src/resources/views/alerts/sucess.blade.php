<div class="alert alert-success" role="alert">
    <h4 class="alert-title">
        {{ $title ?? "Wow! Everything worked!" }}
    </h4>
    <div class="text-muted">
        {{ $slot }}
    </div>
</div>