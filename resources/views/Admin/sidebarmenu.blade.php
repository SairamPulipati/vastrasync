<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<div id="mySidebar" class="sidebar">
    <div class="sidebar-brand">
        <a href="{{ route('Dashboard') }}" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('images/logo.svg') }}" alt="Wedding Studio" style="max-height: 42px; width: auto;" />
        </a>
        <a href="javascript:void(0)" class="closebtn d-md-none" onclick="closeNav()">&times;</a>
    </div>

    <!-- Navigation Items -->
    <div class="sidebar-nav">
        @if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <a href="{{ route('dashboardview') }}" class="sidebar-nav-item {{ request()->is('dashboardview*') || request()->is('AdminDashboard*') ? 'active' : '' }}">
            <i class="fa-solid fa-chart-pie"></i>
            <span>Dashboard</span>
        </a>
        @endif

        <a href="{{ route('pos') }}" class="sidebar-nav-item {{ request()->is('pos*') ? 'active' : '' }}">
            <i class="fa-solid fa-cash-register"></i>
            <span>POS Billing</span>
        </a>

        @if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <a href="{{ route('RegisterStaff') }}" class="sidebar-nav-item {{ request()->is('RegisterStaff*') ? 'active' : '' }}">
            <i class="fa-solid fa-user-group"></i>
            <span>Staff Members</span>
        </a>
        @endif

        <div class="sidebar-nav-item {{ request()->is('products*') || request()->is('stock*') || request()->is('customizedproducts*') ? 'active' : '' }}" onclick="toggleSubmenu('productMenu')">
            <i class="fa-solid fa-box-open"></i>
            <span>Products &amp; Stock</span>
            <i class="fa-solid fa-chevron-down ml-auto" style="font-size: 11px;"></i>
        </div>
        <div id="productMenu" class="sidebar-submenu" style="display: {{ request()->is('products*') || request()->is('stock*') || request()->is('customizedproducts*') ? 'block' : 'none' }};">
            <a href="{{ route('products') }}" class="sub-item"><i class="fa-solid fa-list mr-1"></i> Product List</a>
            <a href="{{ route('stock') }}" class="sub-item"><i class="fa-solid fa-cubes mr-1"></i> Branch Stock</a>
            <a href="{{ route('customizedproducts') }}" class="sub-item"><i class="fa-solid fa-camera mr-1"></i> Custom Packages</a>
        </div>

        <div class="sidebar-nav-item {{ request()->is('Categories*') || request()->is('Brands*') ? 'active' : '' }}" onclick="toggleSubmenu('categoryMenu')">
            <i class="fa-solid fa-tags"></i>
            <span>Categories &amp; Brands</span>
            <i class="fa-solid fa-chevron-down ml-auto" style="font-size: 11px;"></i>
        </div>
        <div id="categoryMenu" class="sidebar-submenu" style="display: {{ request()->is('Categories*') || request()->is('Brands*') ? 'block' : 'none' }};">
            <a href="{{ route('Categories') }}" class="sub-item"><i class="fa-solid fa-folder-open mr-1"></i> Categories</a>
            <a href="{{ route('Brands') }}" class="sub-item"><i class="fa-solid fa-copyright mr-1"></i> Brands</a>
        </div>

        <div class="sidebar-nav-item {{ request()->is('customerlist*') || request()->is('supplierslist*') ? 'active' : '' }}" onclick="toggleSubmenu('partiesMenu')">
            <i class="fa-solid fa-address-book"></i>
            <span>Parties</span>
            <i class="fa-solid fa-chevron-down ml-auto" style="font-size: 11px;"></i>
        </div>
        <div id="partiesMenu" class="sidebar-submenu" style="display: {{ request()->is('customerlist*') || request()->is('supplierslist*') ? 'block' : 'none' }};">
            <a href="{{ route('customerlist') }}" class="sub-item"><i class="fa-solid fa-users mr-1"></i> Customers</a>
            <a href="{{ route('supplierslist') }}" class="sub-item"><i class="fa-solid fa-truck-field mr-1"></i> Suppliers</a>
        </div>

        <a href="{{ route('sales') }}" class="sidebar-nav-item {{ request()->is('sales*') || request()->is('dailysales*') ? 'active' : '' }}">
            <i class="fa-solid fa-receipt"></i>
            <span>Sales &amp; Orders</span>
        </a>

        <a href="{{ route('Purchases') }}" class="sidebar-nav-item {{ request()->is('Purchases*') ? 'active' : '' }}">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Purchases</span>
        </a>

        @if(\Auth::user()->role == 1 || \Auth::user()->role == 2)
        <a href="{{ route('warehouse') }}" class="sidebar-nav-item {{ request()->is('warehouse*') ? 'active' : '' }}">
            <i class="fa-solid fa-store"></i>
            <span>Branches</span>
        </a>
        @endif

        <div class="my-3 border-top" style="border-color: rgba(255,255,255,0.08) !important;"></div>

        <a href="{{ route('logout') }}" class="sidebar-nav-item text-danger">
            <i class="fa-solid fa-right-from-bracket text-danger"></i>
            <span>Log Out</span>
        </a>
    </div>
</div>

<div id="sidebarOverlay" class="sidebar-overlay" onclick="closeNav()"></div>

<script>
    function toggleNav() {
        var sidebar = document.getElementById("mySidebar");
        var main = document.getElementById("main");
        var overlay = document.getElementById("sidebarOverlay");
        if (!sidebar) return;

        sidebar.style.removeProperty("width");
        if (main) main.style.removeProperty("margin-left");

        var isMobile = window.innerWidth < 992;
        if (isMobile) {
            var isOpen = sidebar.classList.toggle("sidebar-open");
            if (overlay) {
                if (isOpen) {
                    overlay.classList.add("active");
                } else {
                    overlay.classList.remove("active");
                }
            }
        } else {
            sidebar.classList.toggle("sidebar-closed");
            if (main) {
                main.classList.toggle("main-expanded");
            }
        }
    }

    function openNav() {
        toggleNav();
    }

    function closeNav() {
        var sidebar = document.getElementById("mySidebar");
        var main = document.getElementById("main");
        var overlay = document.getElementById("sidebarOverlay");
        if (!sidebar) return;

        sidebar.style.removeProperty("width");
        if (main) main.style.removeProperty("margin-left");

        var isMobile = window.innerWidth < 992;
        if (isMobile) {
            sidebar.classList.remove("sidebar-open");
            if (overlay) overlay.classList.remove("active");
        } else {
            sidebar.classList.add("sidebar-closed");
            if (main) main.classList.add("main-expanded");
        }
    }

    function toggleSubmenu(id) {
        var menu = document.getElementById(id);
        if (!menu) return;
        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "block";
        } else {
            menu.style.display = "none";
        }
    }
</script>