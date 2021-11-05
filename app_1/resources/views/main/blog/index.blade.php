@extends('layouts.layout')
@section('title','Блог')
@section('search')
    @include('components.search.search')
@endsection
@section('content')

<div class="content">
    <div class="container">
        <div class="col-lg-9">
            <div class="main-title mb32 mt50 d-flex justify-content-between align-items-center">Блог
                <a class="my-vacancies-mobile-add-btn link-orange-btn orange-btn plus-btn" href="#">+</a></div>
            <div class="tabs mb64">
                <div class="tabs__content active">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex">
                                <div class="paragraph mb8 mr16">Нашлось<span> {{$blog_count}} </span>записей</div>
                            </div>
                            @foreach($blog as $blogs)
                                <div class="news_el">
                                    <div class="news_el_img">
                                        <a href="{{route('main.index.show', ['blog' => $blogs->id])}}"><img
                                                width="150px" src="{{$blogs->img}}" alt="{{$blogs->title}}"></a>
                                        <div class="news_el_data">{{$blogs->created_at}}</div>
                                    </div>
                                    <div class="news_el_cont">
                                        <div class="news_el_tit">
                                            <a href="{{route('main.index.show', ['blog' => $blogs->id])}}"
                                               title="{{$blogs->title}}">{{$blogs->title}}</a></div>
                                        <div class="news_el_txt"> {!! $blogs->text1 !!}<br>
                                            <div class="col-lg-12 d-block">
                                                <i class="fas fa-eye"></i>
                                                <span class="grey">{{$blogs->Viewing}}</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{$blog->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
