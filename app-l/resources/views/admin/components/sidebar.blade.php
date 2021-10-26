<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>
        <div class="d-flex ">
            <ul class=" nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="fas fa-home pr-2"></i>
                        <span>
                            Главная админки
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="fas fa-list pr-2"></i>
                        <span>
                            Категории
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.sidebar -->

</aside>
