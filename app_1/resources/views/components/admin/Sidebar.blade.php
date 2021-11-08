<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->img == true)
                    <img src="{{ Auth::user()->img }}" style="border-radius: 15px" alt="profile-foto">
                @else
                    <img style="border-radius: 15px" src="https://yt3.ggpht.com/a/AATXAJyJrARQbu2zRqfSEg1BIuh1pjerEEiLbhkgsOV_bA=s900-c-k-c0xffffffff-no-rj-mo" alt="profile-foto">
                @endif
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
                    <a href="{{route('main')}}" class="nav-link">
                        <i class="fas fa-undo-alt pr-2"></i>
                        <span>
                            вернуться на сайт
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /.sidebar -->
</aside>


