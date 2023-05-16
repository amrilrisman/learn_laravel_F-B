<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>

            @can('creator')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/blog*') ? 'active' : '' }}" href="/dashboard/blog">
                        <span data-feather="file-text" class="align-text-bottom"></span>
                        Daftar Blog
                    </a>
                </li>
            @endcan
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/add-blog') ? 'active' : '' }}" href="/dashboard/add-blog">
                    <span data-feather="file-plus" class="align-text-bottom"></span>
                    tambah Blog
                </a>
            </li> --}}

        </ul>

        <ul class="nav flex-column">
            <span class="nav-link">
                Administrator
            </span>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Category
                </a>
            </li>

        </ul>



    </div>
</nav>
