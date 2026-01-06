<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('admin/images/upload/645e53bbf24a8.png') }}" class="header-logo w-full">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('admin/images/upload/63f4c15738e28.png') }}" class="header-sm-logo h-15 w-15">
        </a>
    </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Menu</li>

        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-chart-pie"></i> <span>Dashboard</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users') }}">
                <i class="fas fa-user-friends"></i> <span>Users</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.orders', 'admin.orders.create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.orders') }}">
                <i class="fas fa-columns"></i><span>Orders</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.orders.create') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.orders.create') }}">
                <i class="fas fa-ticket-alt"></i><span>Create Order</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.category') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.category') }}">
                <i class="fas fa-glass-cheers"></i> <span>Category</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.notification') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.notification') }}">
                <i class="fas fa-bell"></i> <span>Send Notification</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.content') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.content') }}">
                <i class="fas fa-file-alt"></i> <span>Content</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.events') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.events') }}">
                <i class="fas fa-calendar-alt"></i> <span>Events</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.wallet') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.wallet') }}">
                <i class="fas fa-wallet"></i><span>Wallet Transactions</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.blog') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.blog') }}">
                <i class="fas fa-newspaper"></i><span>Blog</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.pages') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.pages') }}">
                <i class="fas fa-file"></i><span>Page</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.coupon') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.coupon') }}">
                <i class="fas fa-tags"></i> <span>Coupon</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/banner">
                <i class="fas fa-images"></i><span>Banner</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/user-review">
                <i class="fas fa-star"></i> <span>Review</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/event-review">
                <i class="fas fa-flag"></i> <span>Reported Events</span>
            </a>
        </li>

        <li class="nav-item dropdown {{ request()->routeIs('admin-report.*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-chart-bar"></i> <span>Reports</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="https://eventrights.saasmonks.in/admin-report/customer">Customer Report</a></li>
                <li><a class="nav-link" href="https://eventrights.saasmonks.in/admin-report/organization">Organization Report</a></li>
                <li><a class="nav-link" href="https://eventrights.saasmonks.in/admin-report/revenue">Revenue Report</a></li>
                <li><a class="nav-link" href="https://eventrights.saasmonks.in/admin-report/settlement">Settlement Report</a></li>
            </ul>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/notification-template">
                <i class="fas fa-bell"></i><span>Notification Template</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/tax">
                <i class="fas fa-hand-holding-usd"></i><span>Tax</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.scanner') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.scanner') }}">
                <i class="fas fa-comments"></i><span>Scanner</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/faq">
                <i class="fas fa-question-circle"></i><span>FAQs</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/language">
                <i class="fas fa-language"></i><span>Language</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/brands">
                <i class="fas fa-building"></i><span>Featured Brands</span>
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.setting') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.setting') }}">
                <i class="fas fa-cogs"></i><span>Setting</span>
            </a>
        </li>

        <li>
            <a class="nav-link" href="https://eventrights.saasmonks.in/module">
                <i class="fas fa-tasks"></i><span>Module</span>
            </a>
        </li>

    </ul>
</aside>
