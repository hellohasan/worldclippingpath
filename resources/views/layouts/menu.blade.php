<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item has-treeview">
    <a href="#" class="nav-link {{ Request::is(['roles', 'permissions']) ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Role & Permission<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Role</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Permission</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>Search<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('/search') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/search2') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>Search<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('/search') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/search2') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
            </a>
        </li>
    </ul>
</li>
