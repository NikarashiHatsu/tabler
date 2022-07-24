<div class="alert alert-danger" role="alert">
    <h4 class="alert-title">
        {{ $title ?? "I'm so sorry…" }}
    </h4>
    <div class="text-muted">
        {{ $slot }}
    </div>
</div>