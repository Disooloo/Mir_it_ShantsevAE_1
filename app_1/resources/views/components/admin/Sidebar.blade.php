<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->img }}" style="border-radius: 15px" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <div class="d-flex ">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('homeAdmin')}}" class="nav-link">
                        <i class="fas fa-home pr-2"></i>
                        <span>
                            Главная админки
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <i class="fas fa-list pr-2"></i>
                        <span>
                            Категории
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blog.index')}}" class="nav-link">
                        <i class="fas fa-shapes pr-2"></i>
                        <span>
                            Блог
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                        <i class="fas fa-paste pr-2"></i>
                        <span>
                            Посты
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        <i class="fas fa-users pr-2"></i>
                        <span>
                            Пользователи
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>


