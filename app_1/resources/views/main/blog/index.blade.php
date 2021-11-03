@extends('layouts.layout')

@section('content')

        <div class="content">
            <div class="container">
                <div class="col-lg-9">
                    <div class="main-title mb32 mt50 d-flex justify-content-between align-items-center">Блог
                        <a href="#" class="link-orange-btn orange-btn my-vacancies-add-btn">Добавить запись</a><a
                            class="my-vacancies-mobile-add-btn link-orange-btn orange-btn plus-btn" href="#">+</a></div>
                    <div class="tabs mb64">
                        <div class="tabs__content active">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex">
                                        <div class="paragraph mb8 mr16">Нашлось<span> {{$blog_count}} </span>записей</div>
                                    </div>
                                    @foreach($post as $blogs)
                                        <div class="vakancy-page-block my-vacancies-block p-rel mb16">
                                            <div class="row">
                                                <div class="my-resume-dropdown dropdown show mb8">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="images/dots.svg" alt="dots">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Редактировать</a>
                                                        <a class="dropdown-item" href="#">Удалить</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 my-vacancies-block__left-col mb16">
                                                    <a href="{{route('blog.show', $blogs->id)}}">
                                                        <h2 class="mini-title mb8">{{$blogs->title}}</h2>
                                                    </a>
                                                    <a href="{{route('blog.show', $blogs->id)}}">
                                                        <img src="{{$blogs->img}}" width="350px" alt="">
                                                    </a>
                                                    <div class="d-flex align-items-center flex-wrap mb8 ">
                                                        <span class="mr16 paragraph">{{$blogs->text1}}</span>
                                                    </div>
                                                    <div class="d-flex flex-wrap">
                                                        <hr>
                                                        <div class="paragraph mr16">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="grey">{{$blogs->Viewing}}</span><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 d-flex justify-content-between align-items-center flex-wrap">
                                                    <span class="mini-paragraph cadet-blue">Опубликовано {{$blogs->created_at}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
