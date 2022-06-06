<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>


<li class="nav-item has-treeview">
    <a class="nav-link">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Basic Setting<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('basic-content') }}" class="nav-link">
                <i class="fas fa-cog nav-icon"></i>
                <p>Basic Content</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logo-favicon') }}" class="nav-link">
                <i class="far fa-image nav-icon"></i>
                <p>Logo & Favicon</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview">
    <a class="nav-link">
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
    <a href="{{ route('manage-profile') }}" class="nav-link">
        <i class="nav-icon fas fa-user-edit"></i>
        <p>Manage Profile</p>
    </a>
</li>

<li class="nav-item">
    <a href="##" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Sign Out</p>
    </a>
</li>
