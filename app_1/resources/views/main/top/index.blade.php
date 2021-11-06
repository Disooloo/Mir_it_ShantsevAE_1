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
                @endif
                @foreach( $post as $el)
                    <div class="news_el">
                        <div class="news_el_img">
                            <a href="{{$el->img}}" title="{{$el->title}}"><img width="150px" src="{{$el->img}}"
                                                                               alt="{{$el->title}}"></a>
                            <div class="news_el_data">{{$el->created_at}}</div>
                        </div>
                        <div class="news_el_cont">
                            <div class="news_el_tit">
                                <a href="{{$el->link}}" title="{{$el->title}}">{{$el->title}}</a></div>
                            <div class="news_el_txt"> {!! $el->content !!}<br>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
