<li @class(["nav-item dropdown", "active" => $active])>
    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
        role="button" aria-expanded="true">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            {!! $icon !!}
        </span>
        <span class="nav-link-title">
            {{ $title }}
        </span>
    </a>
    <div @class(["dropdown-menu", "show" => $active])>
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                {{ $slot }}
            </div>
        </div>
    </div>
</li>
