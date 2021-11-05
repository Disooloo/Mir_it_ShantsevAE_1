<div class="header-search">
    <div class="container">
        <div class="header-search__wrap">
            <form class="header-search__form" method="get" action="{{route('main.index.search')}}" >
                <a href="#"><img src="{{asset('images/dark-search.svg')}}" alt="search"
                                 class="dark-search-icon header-search__icon"></a>

                    <input class="header-search__input" id="s" name="s" value="" type="text" placeholder="Поиск....">
                <button type="button" class="blue-btn header-search__btn">Найти</button>
            </form>
        </div>
    </div>
</div>
