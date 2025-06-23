<div>
<aside class="sidebar">
    <!-- Sidebar close button (mobile) -->
    <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute">
        <i class="ph ph-x"></i>
    </button>

    <!-- Logo -->
    <a href="{{ route('superadmin.dashboard') }}" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="{{ asset('images/logo/logo.png') }}" alt="TopLearner Logo">
    </a>

    <!-- Sidebar menu -->
    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">

                <!-- Dashboard -->
                <li class="sidebar-menu__item">
                    <a href="{{ route('superadmin.dashboard') }}" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gauge"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <!-- Course Management -->
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Courses</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-books"></i></span>
                        <span class="text">List of Courses</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-plus-circle"></i></span>
                        <span class="text">Create Course</span>
                    </a>
                </li>

                <!-- Video Management -->
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Video Modules</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-video-camera"></i></span>
                        <span class="text">Upload Video Module</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-trash"></i></span>
                        <span class="text">Delete Video Module</span>
                    </a>
                </li>

                <!-- User Management -->
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">User Management</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-student"></i></span>
                        <span class="text">Student Details</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-buildings"></i></span>
                        <span class="text">Institution Details</span>
                    </a>
                </li>

                <!-- E-Learning Platform Settings -->
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Platform Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">General Settings</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users-four"></i></span>
                        <span class="text">Manage Roles & Permissions</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-list-bullets"></i></span>
                        <span class="text">Activity Logs</span>
                    </a>
                </li>

                <!-- Logout -->
                <li class="sidebar-menu__item pt-20 border-top border-gray-100">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="sidebar-menu__link w-100 text-start">
                            <span class="icon"><i class="ph ph-sign-out"></i></span>
                            <span class="text">Logout</span>
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</aside>
</div>
