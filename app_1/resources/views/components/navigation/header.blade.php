<header class="header" style="max-height: 90px;">
    <div class="container">
        <nav class="navbar navigation">
            <a class="navbar-brand" href="{{route('main')}}">
                <img src="{{asset('images/logo.svg')}}" width="100px" alt="Logo">
            </a>
            <div class="header__login header__login-mobile">
            </div>
            <ul class="navigation-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Топ 10</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Свежие новомти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Войти</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user() == true)
                    <div class="nav-item">
                        <span>
                            <img src="https://ulibky.ru/wp-content/uploads/2019/09/Kartinki_na_avu__na_yutub_7_13095549.jpg" style="border-radius: 20px; display: block" width="50px" alt="">
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        </span>
                    </div>
                @endif
            </ul>
            <div class="navigation-menu__mobile">
                <ul class="navigation-menu__mobile-nav">
                    <div class="navigation-menu__mobile-nav-top">
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="#">Резюме</a>
                        </li>
                        <li class="navigation-menu__mobile-nav-item">
                            <a class="nav-link" href="#">Мои резюме</a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="navigation-toggler">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </div>
</header>
