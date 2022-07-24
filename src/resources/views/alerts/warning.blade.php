<div class="alert alert-warning" role="alert">
    <h4 class="alert-title">
        {{ $title ?? "Uh oh, something went wrong" }}
    </h4>
    <div class="text-muted">
        {{ $slot }}
    </div>
</div>