
    <!-- ============================================================== -->

    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse"
                                aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i
                                    class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                    class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse"
                                            aria-expanded="false" data-target="#submenu-1-2"
                                            aria-controls="submenu-1-2">Admin</a>
                                        <div id="submenu-1-2" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/admin/view') }}">View Admin</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ url('/admin/register')}}">Register Admin
                                                        </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="ecommerce-product-single.html">Trash
                                                        Admin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-2" aria-controls="submenu-2"><i
                                    class="fa fa-fw fa-rocket"></i>Products</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('create.product.table') }}">View Products<span
                                                class="badge badge-secondary">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('create.product') }}">Register Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('create.trash.product') }}">Trash Products</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-3" aria-controls="submenu-3"><i
                                    class="fas fa-fw fa-chart-pie"></i>Category Manager</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('create.category.table') }}">View Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/category/register') }}">Register Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('create.trash.page') }}">Trash Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            User Management
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-6" aria-controls="submenu-6"><i
                                    class="fas fa-fw fa-file"></i>
                                USER </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.user.list') }}">View Users
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            Customers Registration
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-7" aria-controls="submenu-7"><i
                                    class="fas fa-fw fa-inbox"></i>Admin Customer Register <span
                                    class="badge badge-secondary">New</span></a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        href="{{ url('/customer/view') }}">
                                        View Customers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                        href="/customer/register">
                                        Register Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/customer/trash')}}">
                                            Trash Customers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            customers Orders
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                data-target="#submenu-10" aria-controls="submenu-10"><i
                                    class="fas fa-f fa-folder"></i>ORDERS</a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('booking.products') }}">View Orders</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
