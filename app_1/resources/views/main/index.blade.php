@extends('layouts.layout')
@section('title','Главная')
@section('search')
    @include('components.search.search')
@endsection



@section('content')
<div class="content">
    <div class="container">
        <h1 class="main-title mt24 mb16">Люди, изменившие IT</h1>
        <div class="row">
            <div class="col-lg-9 desctop-992-pr-16">
                <div class="d-flex align-items-center flex-wrap mb8">
                    <span class="paragraph mr16">Найдено {{$post_count}} постов</span>
                </div>
                @foreach( $post as $el)
                    <div class="news_el">
                        <div class="news_el_img">
                            <a href="{{$el->img}}" title="{{$el->title}}">
                                <img width="150px" src="{{$el->img}}"
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
            {{ $post->links() }}
        </div>
    </div>
    </div>
</div>
@endsection
