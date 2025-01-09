<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="../../dist/assets/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3" />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                </h3>
                                <p class="fs-7">Call me whenever you can...</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="../../dist/assets/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3" />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-end fs-7 text-secondary">
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </h3>
                                <p class="fs-7">I got your message bro</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="../../dist/assets/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3" />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-end fs-7 text-warning">
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </h3>
                                <p class="fs-7">The subject goes here</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                        <!--end::Message-->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> 4 new messages
                        <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> 8 friend requests
                        <span class="float-end text-secondary fs-7">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                        <span class="float-end text-secondary fs-7">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                </div>
            </li>
            <!--end::Notifications Dropdown Menu-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                    <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow me-2"
                        alt="User Image" />
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end text-center">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img src="../../dist/assets/img/user2-160x160.jpg"
                            class="rounded-circle shadow mx-auto d-block" alt="User Image" />
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('F d, Y') }}</small>
                        </p>
                    </li>
                    <!--end::User Image-->

                    <!--begin::Menu Footer-->
                    <li class="user-footer d-flex justify-content-around">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->
<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="{{ url('admin/dashboard') }}" class="brand-link">
            <img src="../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">School.com</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu"
                data-accordion="false">
                @if (Auth::user()->usertype == 'admin')
                    <li class="nav-item">
                        <a href="{{ url('admin/dashboard') }}"
                            class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/admin/list') }}"
                            class="nav-link {{ request()->is('admin/admin/list') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-person"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                @elseif (Auth::user()->usertype == 'teacher')
                    <li class="nav-item">
                        <a href="{{ url('teacher/dashboard') }}"
                            class="nav-link {{ request()->is('teacher/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('teacher/teacher/list') }}"
                            class="nav-link {{ request()->is('teacher/teacher/list') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-person"></i>
                            <p>Teacher</p>
                        </a>
                    </li>
                @elseif (Auth::user()->usertype == 'student')
                    <li class="nav-item">
                        <a href="{{ url('student/dashboard') }}"
                            class="nav-link {{ request()->is('student/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('student/student/list') }}"
                            class="nav-link {{ request()->is('student/student/list') ? 'active' : '' }}">
                            <i class="nav-icon bi bi-person"></i>
                            <p>Student</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="{{ url('logout') }}" class="nav-link {{ request()->is('logout') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-person"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!--end::Sidebar-->
