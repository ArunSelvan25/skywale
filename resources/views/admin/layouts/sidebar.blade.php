<!-- partial:partials/sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Registration</span>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.house_owner.register') }}"> House Owner </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.house_owner.register') }}"> Property </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.house_owner.register') }}"> Primary User </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.house_owner.register') }}"> Sub User </a></li>

                </ul>
            </div>
        </li>
    </ul>
</nav>
