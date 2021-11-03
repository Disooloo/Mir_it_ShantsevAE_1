@extends('layouts.layout')
@section('title', 'Блог')


@section('content')
    <div class="content p-rel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt8 mb32"><a href="{{route('main')}}"><img src="images/blue-left-arrow.svg" alt="arrow">Вернуться</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5 mobile-mb32">


                    <div class="profile-foto resume-profile-foto">
                        @if (Auth::user()->img == true)
                        <img src="{{ Auth::user()->img }}" alt="profile-foto">
                            @else
                            <img  src="https://www.rcm.ac.uk/staffxml/images/missing.jpg" alt="profile-foto">
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="main-title d-md-flex justify-content-between align-items-center mobile-mb16">Профиль пользователя
                    </div>
                    <div class="paragraph-lead mb16">
                        <span class="mr24">Роль:</span>
                        <span>role</span>
                    </div>
                    <div class="profile-info company-profile-info resume-view__info-blick">
                        <div class="profile-info__block company-profile-info__block mb8">
                            <div class="profile-info__block-left company-profile-info__block-left">Имя
                            </div>
                            <div class="profile-info__block-right company-profile-info__block-right">{{ Auth::user()->name }}
                            </div>
                        </div>
                        <div class="profile-info__block company-profile-info__block mb8">
                            <div class="profile-info__block-left company-profile-info__block-left">Дата регистрации
                            </div>
                            <div class="profile-info__block-right company-profile-info__block-right">{{ Auth::user()->created_at }}</div>
                        </div>
                        <div class="profile-info__block company-profile-info__block mb8">
                            <div class="profile-info__block-left company-profile-info__block-left">
                                Электронная почта
                            </div>
                            <div class="profile-info__block-right company-profile-info__block-right">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="{{route('profiles.create')}}" class="btn btn-success">Редактировать</a>
                     @if(Auth::user()->name == "admin")
                        <a href="{{route('homeAdmin')}}" class="btn btn-success">Войти в админку</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
