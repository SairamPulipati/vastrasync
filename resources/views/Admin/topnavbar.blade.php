<div class="top-navbar">
    <div class="d-flex align-items-center">
        <button class="brand-toggle-btn mr-3" onclick="openNav()" title="Toggle Sidebar">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div>
            <h5 class="mb-0 font-weight-bold" style="color: #1e1b4b; font-size: 16px; letter-spacing: -0.3px;">
                @yield('page_title', 'Men\'s Wedding Studio')
            </h5>
            <small class="text-muted" style="font-size: 11.5px;">
                <i class="fa-solid fa-location-dot mr-1 text-primary"></i> 
                {{ Auth::user()->BranchData->name ?? 'Main Studio Branch' }}
            </small>
        </div>
    </div>
    <div class="d-flex align-items-center">
        <div class="mr-3 d-none d-md-flex align-items-center" style="gap: 8px;">
            <a href="{{ route('pos') }}" class="btn btn-sm btn-outline-primary" style="border-radius: 8px; font-weight: 500; font-size: 12.5px;">
                <i class="fa-solid fa-cash-register mr-1"></i> New Sale
            </a>
            @if(Auth::user()->role == 1 || Auth::user()->role == 2)
            <a href="{{ route('products') }}" class="btn btn-sm btn-outline-secondary" style="border-radius: 8px; font-weight: 500; font-size: 12.5px;">
                <i class="fa-solid fa-boxes-stacked mr-1"></i> Catalog
            </a>
            @endif
        </div>
        <div class="user-profile-badge">
            <div class="text-right mr-2 d-none d-sm-block">
                <div class="font-weight-bold" style="font-size: 13px; color: #1e293b; line-height: 1.2;">
                    {{ Auth::user()->name ?? 'User' }}
                </div>
                <small class="badge px-2 py-0" style="font-size: 10px; background-color: #e0e7ff; color: #4338ca; font-weight: 600;">
                    @if(Auth::user()->role == 1) Super Admin
                    @elseif(Auth::user()->role == 2) Admin
                    @elseif(Auth::user()->role == 3) Product Manager
                    @elseif(Auth::user()->role == 4) POS Cashier
                    @elseif(Auth::user()->role == 5) Sales Associate
                    @else Staff
                    @endif
                </small>
            </div>
            <div class="user-avatar" title="{{ Auth::user()->email ?? '' }}">
                {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
            </div>
            <a href="{{ route('logout') }}" class="btn-navbar-logout ml-2" title="Sign Out">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div>
    </div>
</div>
