<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo d-flex justify-content-center">
        <a href="/admin" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/assets/img/PNG-3-Big-Size.png" alt="" style="width: 130px;">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul id="menu-inner" class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('/admin') ? 'active' : '' }}">
            <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('/admin/employee') ? 'active' : '' }}">
            <a href="/admin/employee" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div>Employee</div>
            </a>
        </li>
    </ul>
</aside>

