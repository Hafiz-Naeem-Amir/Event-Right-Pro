<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar">

    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>

    <ul class="navbar-nav navbar-right">
        {{-- Notifications --}}
        <li>
            <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep">
                <i class="far fa-bell"></i>
            </a>

            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <a class="text-decoration-none float-right" href="#">Mark All As Read</a>
                </div>

                <div class="dropdown-list-content dropdown-list-icons">
                    {{-- Example notification --}}
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon bg-danger text-white">
                            <img class="avatar" src="{{ asset('admin/images/upload/64196b8698592.jpg') }}">
                        </div>
                        <div class="dropdown-item-desc">
                            Hi {{ auth()->user()->name }}, Gordon Kinley has booked 1 ticket for event Virtual Live Karaoke.
                            <div class="time">13 hours ago</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>

        {{-- Language --}}
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img src="{{ asset('admin/images/upload/English.png') }}" class="mr-1 flag-icon">
                <div class="d-sm-none d-lg-inline-block"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item has-icon">
                    <img src="{{ asset('admin/images/upload/English.png') }}" class="mr-2 flag-icon">
                    English
                </a>
            </div>
        </li>

        {{-- User Dropdown --}}
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('admin/images/upload/6418617825d38.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->fisrt_name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Welcome {{ auth()->user()->first_name }}!</div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item btn btn-outline-danger">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>

</nav>
