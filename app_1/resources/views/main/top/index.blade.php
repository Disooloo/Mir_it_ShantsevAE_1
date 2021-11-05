@extends('layouts.layout')
@section('title','Топ 10 IT людей')
@section('content')

    <div class="content">
        <div class="container">
            <h1 class="main-title mt24 mb16">Поиск по категориям</h1>
            <div class="row">
                <div class="col-lg-9 desctop-992-pr-16">
                    @if ($categories)
                        <ul class="navigation-nav">
                            <li>
                                <a href="{{ route('main.top.index') }}"
                                   @if (!$categoryId)
                                   class="active"
                                    @endif
                                >Последние</a>
                            </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="{{ route('main.top.top', $category->id) }}"
                                   @if (intval($categoryId) === $category->id)
                                   class="active"
                                    @endif
                                >{{ $category->title }} <sup>{{ $category->count }}</sup></a>
                            </li>
                        @endforeach
                    </ul>
                    @else
                        <p>Записей не найдено</p>
                    @endif
                    @foreach( $post as $el)
                        <div class="vakancy-page-block company-list-search__block resume-list__block p-rel mb16">
                            <div class="company-list-search__block-left">
                                <div class="resume-list__block-img mb8">
                                    <img src="{{$el->img}}" alt="profile">
                                </div>
                            </div>
                            <div class="company-list-search__block-right">
                                <div class="mini-paragraph cadet-blue mobile-mb12">Обновлено {{$el->create_at}}</div>
                                <a href="{{$el->link}}"><h3 class="mini-title mobile-off">{{$el->title}}</h3></a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <span class="mr16 paragraph">
                                         <br>
                                            <?=strip_tags ($el->content)?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
@endsection
