<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

        <li class="active"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

<li class="nav-item dropdown active">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Users</span></a>
    <ul class="dropdown-menu">
        <li class="active"><a class="nav-link" href="{{ route('admin_user_create') }}"><i class="fas fa-angle-right"></i>User Create</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin_user_show') }}"><i class="fas fa-angle-right"></i>User Show</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin_skill_create') }}"><i class="fas fa-angle-right"></i>Skill create</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin_skill_show') }}"><i class="fas fa-angle-right"></i>Skiil Show</a></li>
    </ul>
</li>
        </ul>
    </aside>
</div>