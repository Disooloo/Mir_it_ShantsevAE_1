@extends('layouts.layout')
@section('title', 'Блог')
@section('content')
<div class="col-lg-12">
    <div class="mt8 mb32"><a href="{{route('main.index.blog')}}">
            <img src="{{asset('images/blue-left-arrow.svg')}}" alt="arrow"> Вернкться </a>
    </div>
</div>
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$blog->title}}</h1>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{$blog->img}}" alt="featured image" class="w-100 mb-4">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    <p>{!! $blog->text1 !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <p>{!! $blog->text2 !!}</p>
                </div>
            </div>
            <div class="news_det_info clear_after">
                <div class="news_det_data">{{$blog->created_at}}</div>
                <div class="news_det_look"><i class="fas fa-eye"></i> {{$blog->Viewing}} </div>
                <div class="news_det_back">
                    <a href="{{route('main.index.blog')}}">
                        <img src="{{asset('images/blue-left-arrow.svg')}}" alt="arrow">
                        Назад к публикациям
                    </a>
                </div>
            </div>
        </section>
        <br>
        <hr>
        <section class="comment-section">
            <h2 class="section-title mb-5 aos-init aos-animate" data-aos="fade-up">Оставить коментарий</h2>
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-12 aos-init aos-animate" data-aos="fade-up">
                        <label for="comment" class="sr-only">Коментарий</label>
                        <textarea name="comment" id="comment" class="form-control" placeholder="Коментарий"
                                  rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 aos-init" data-aos="fade-right">
                        <label for="name" class="sr-only">Имя</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Имя*">
                    </div>
                    <div class="form-group col-md-4 aos-init" data-aos="fade-up">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*"
                               required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 aos-init" data-aos="fade-up">
                        <input type="submit" value="Отправить" class="btn btn-warning">
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>

@endsection
