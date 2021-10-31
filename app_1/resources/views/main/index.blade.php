@extends('layouts.layout')


@section('content')

    <div class="content">
        <div class="container">
            <h1 class="main-title mt24 mb16">Люди изменившие IT</h1>
            <button class="vacancy-filter-btn">Фильтр</button>
            <div class="row">
                <div class="col-lg-9 desctop-992-pr-16">
                    <div class="d-flex align-items-center flex-wrap mb8">
                        <span class="paragraph mr16">Найдено 2 человека</span>

                        <div class="vakancy-page-header-dropdowns">

                            <div class="vakancy-page-wrap show mr16">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">За день</a>
                                    <a class="dropdown-item" href="#">За год</a>
                                    <a class="dropdown-item" href="#">За все время</a>
                                </div>
                            </div>
                            <div class="vakancy-page-wrap show">
                                <a class="vakancy-page-btn vakancy-btn dropdown-toggle" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    По новизне
                                    <i class="fas fa-angle-down arrowDown"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">По новизне</a>
                                    <a class="dropdown-item" href="#">По возрастанию зарплаты</a>
                                    <a class="dropdown-item" href="#">По убыванию зарплаты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach( $post as $el)
                        <div class="vakancy-page-block company-list-search__block resume-list__block p-rel mb16">
                            <div class="company-list-search__block-left">
                                <div class="resume-list__block-img mb8">
                                    <img src="{{$el->img}}" alt="profile">
                                </div>
                            </div>
                            <div class="company-list-search__block-right">
                                <div class="mini-paragraph cadet-blue mobile-mb12">Обновлено {{$el->create_at}}</div>
                                <h3 class="mini-title mobile-off">{{$el->title}}</h3>
                                <div class="d-flex align-items-center flex-wrap mb8 ">
                                    <span class="mr16 paragraph">{{$el->content}} <a href="{{$el->link}}">Подробнее</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

{{--                    <ul class="dor-pagination mb128">--}}
{{--                        <li class="page-link-prev"><a href="#"><img class="mr8"--}}
{{--                                                                    src="images/mini-left-arrow.svg" alt="arrow"> Назад</a>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">1</a></li>--}}
{{--                        <li><a class="grey" href="#">...</a></li>--}}
{{--                        <li class="active"><a href="#">4</a></li>--}}
{{--                        <li><a href="#">5</a></li>--}}
{{--                        <li><a class="grey" href="#">...</a></li>--}}
{{--                        <li><a href="#">10</a></li>--}}
{{--                        <li class="page-link-next"><a href="#">Далее <img class="ml8"--}}
{{--                                                                          src="images/mini-right-arrow.svg" alt="arrow"></a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>
              @include('components.search.filter')
            </div>
        </div>
    </div>
@endsection
