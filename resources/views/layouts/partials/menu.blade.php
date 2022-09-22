<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>
@can('categories')
    <li class="nav-item">
        <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th-large"></i>
            <p>Categories</p>
        </a>
    </li>
@endcan

@role('Super Admin')
    <li class="nav-item has-treeview">
        <a role="button" class="nav-link">
            <i class="nav-icon fas fa-server"></i>
            <p>Services<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('services.create') }}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Create Service</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('services.index') }}" class="nav-link">
                    <i class="fas fa-list-ul nav-icon"></i>
                    <p>Service List</p>
                </a>
            </li>
        </ul>
    </li>
@endrole

@role('Super Admin')
    <li class="nav-item has-treeview">
        <a role="button" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>Service Category<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('service-category.create') }}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Create Portfolio</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('service-category.index') }}" class="nav-link">
                    <i class="fas fa-list-ul nav-icon"></i>
                    <p>Category List</p>
                </a>
            </li>
        </ul>
    </li>
@endrole

@role('Super Admin')
    <li class="nav-item has-treeview">
        <a role="button" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>Service Portfolio<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('service-portfolio.create') }}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Create New</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('service-portfolio.index') }}" class="nav-link">
                    <i class="fas fa-history nav-icon"></i>
                    <p>History List</p>
                </a>
            </li>
        </ul>
    </li>
@endrole

@role('Super Admin')
    <li class="nav-item has-treeview">
        <a role="button" class="nav-link">
            <i class="nav-icon fas fa-quote-left"></i>
            <p>Service Testimonial<i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('service-testimonial.create') }}" class="nav-link">
                    <i class="fas fa-plus nav-icon"></i>
                    <p>Create Testimonial</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('service-testimonial.index') }}" class="nav-link">
                    <i class="fas fa-history nav-icon"></i>
                    <p>Testimonial List</p>
                </a>
            </li>
        </ul>
    </li>
@endrole


<li class="nav-header">General Settings</li>

<li class="nav-item has-treeview">
    <a role="button" class="nav-link">
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

<li class="nav-item">
    <a href="{{ route('system-information') }}" class="nav-link">
        <i class="nav-icon fas fa-server"></i>
        <p>System Information</p>
    </a>
</li>

<li class="nav-item has-treeview">
    <a role="button" class="nav-link">
        <i class="nav-icon fas fa-fingerprint"></i>
        <p>Role & Permission<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="fas fa-user-secret nav-icon"></i>
                <p>Manage Role</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link">
                <i class="fas fa-shield-alt nav-icon"></i>
                <p>Manage Permission</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview">
    <a role="button" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Manage Users<i class="right fas fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        @can('users-create')
            <li class="nav-item">
                <a href="{{ route('users.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create User</p>
                </a>
            </li>
        @endcan
        @can('users')
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User List</p>
                </a>
            </li>
        @endcan
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('edit-profile') }}" class="nav-link">
        <i class="nav-icon fas fa-user-edit"></i>
        <p>Edit Profile</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('change-password') }}" class="nav-link">
        <i class="nav-icon fas fa-lock-open"></i>
        <p>Change Password</p>
    </a>
</li>
<li class="nav-item">
    <a href="##" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Sign Out</p>
    </a>
</li>
