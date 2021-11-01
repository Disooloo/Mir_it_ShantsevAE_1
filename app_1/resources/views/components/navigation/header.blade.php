<header class="header">
    <div class="container">
        <nav class="navbar navigation">
            <a class="navbar-brand col-lg-2" href="{{route('main')}}">
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
                <li class="nav-item ">
                    <a class="nav-link" href="#">Блог</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user() == false)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth')}}">Войти</a>
                </li>
                    @else
                        <li class="nav-item">

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    <div class="dropdown">
                        <a class="dropdown-toggle chevron block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Профиль
                            <img src="{{asset('images/chevrondown.svg')}}"  width="35px" alt="chevron">
                        </a>
                        <br>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <ul style="width: 150px">
                               <li><a href="#" class="av-link">Здравствуйте, {{ Auth::user()->name }}</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li> <a class="nav-link" href="{{route('profiles.index')}}">Профиль</a></li>
                               <li>  <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Выйти
                                   </a></li>
                               <li><hr class="dropdown-divider"></li>
                           </ul>
                        </div>
                    </div>
                @endif
            </ul>
            <div class="navigation-menu__mobile">
                <ul class="navigation-menu__mobile-nav">
                    <div class="navigation-menu__mobile-nav-top">
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="#">Главная</a>
                        </li>
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="#">Топ 10</a>
                        </li>
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="#">Новости</a>
                        </li>
                        <li class="navigation-menu__mobile-nav-item active">
                            <a class="nav-link" href="#">Блог</a>
                        </li>
                        <li><hr></li>
                        @if(\Illuminate\Support\Facades\Auth::user() == true)
                            <li class="navigation-menu__mobile-nav-item">
                                <a class="nav-link" href="#"> {{ Auth::user()->name }}</a>
                            </li>
                            <li class="navigation-menu__mobile-nav-item">
                                <a class="nav-link" href="{{route('profiles.index')}}">Профиль</a>
                            </li>
                            <li class="navigation-menu__mobile-nav-item">
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Выйти
                                </a>
                            </li>
                            @else
                            <li class="navigation-menu__mobile-nav-item">
                                <a class="nav-link" href="{{route('auth')}}">Войти</a>
                            </li>
                        @endif
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>

    .chevron img:hover{
        transform: translateY(10px);
    }

    .chevron img{
        transition: all 0.5s ease-in-out;
    }



    .chevron:hover{
        animation-play-state: paused;
    }

    .chevron{
        color: white;
        position: absolute;
        top: 5px;
        right: -103%;
        cursor: pointer;
        animation: chevron_animate infinite 2s ease-in-out;

    }




    }
</style>



<script>
    $('.block').click(function(){
        $('.some').removeClass();
    });
</script>
