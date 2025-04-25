<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset("backend") }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">News Portal</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/admin/dashboard') }}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a  class="has-arrow cursor-pointer">
                <div class="parent-icon"><i class="fadeIn animated bx bx-repost"></i></div>
                <div class="menu-title">Post Management</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.categories') }}"><i class="bx bx-right-arrow-alt"></i>Categories</a></li>
                <li> <a href="{{ route('admin.sub.categories') }}"><i class="bx bx-right-arrow-alt"></i>Sub Categories</a></li>
                <li> <a href="{{ route('admin.posts') }}"><i class="bx bx-right-arrow-alt"></i> Posts </a></li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
