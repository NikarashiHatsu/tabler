<li @class(['nav-item', 'active' => $active])>
    <a class="nav-link" href="{{ $route }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            {!! $icon ?? "" !!}
        </span>
        <span class="nav-link-title">
            {{ $title }}
        </span>
    </a>
</li>