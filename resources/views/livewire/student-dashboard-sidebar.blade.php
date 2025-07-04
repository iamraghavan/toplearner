<div>
<aside class="sidebar">
    <!-- Sidebar close button -->
    <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute">
        <i class="ph ph-x"></i>
    </button>

    <!-- Logo -->
    <a href="{{ route('students.dashboard') }}" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Logo">
    </a>

    <!-- Sidebar menu -->
    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                        <span class="text">Courses</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                        <span class="text">Assignment</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-bookmarks"></i></span>
                        <span class="text">Resources</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="#" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-gear"></i></span>
                        <span class="text">Account Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
</div>

