<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
                <img src="{{ asset('images/brand/light.svg') }}" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
                Volt Laravel
            </span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.data.nazir') ? 'active' : '' }}">
        <a href="{{ route('admin.data.nazir') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                <i class="fas fa-user-alt fa-fw"></i>
            </span>
            <span class="sidebar-text">{{ __('Nazir') }}</span>
        </a>
    </li>

    <li class="nav-item {{ request()->routeIs('admin.kinerja.nazir') ? 'active' : '' }}">
        <a href="{{ route('admin.kinerja.nazir') }}" class="nav-link">
            <span class="sidebar-icon">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
            </span>
            <span class="sidebar-text">{{ __('Kinerja') }}</span>
        </a>
    </li>
</ul>