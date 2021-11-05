@extends('layouts.admin_layout')
@section('title', 'Блог')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('homeAdmin')}}">Назад</a></li>
                            <li class="breadcrumb-item active">Статьи</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2 mb-4">
                        <a href="{{route('blog.create')}}" class="btn btn-block btn-success">Добавить</a>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%">
                                            ID
                                        </th>
                                        <th>
                                            Название
                                        </th>
                                        <th>
                                            Просмотры
                                        </th>
                                        <th>
                                            Дата добавления
                                        </th>
                                        <th>
                                            Картинка
                                        </th>
                                        <th style="width: 30%">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog as $blogs)
                                        <tr>
                                            <td>
                                                {{$blogs['id']}}
                                            </td>
                                            <td>
                                                {{$blogs['title']}}
                                            </td>
                                            <td>
                                                {{$blogs['Viewing']}}
                                            </td>
                                            <td>
                                                {{$blogs['created_at']}}
                                            </td>
                                            <td>
                                                <img src="{{$blogs['img']}}" alt="" width="150px">
                                            </td>

                                            <td class="project-actions text-right">
                                                <a class="btn btn-info btn-sm" href="{{route('blog.edit', $blogs['id'])}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Редактировать
                                                </a>
                                                <form action="{{route('blog.destroy', $blogs['id'])}}" method="POST"
                                                      style="display: inline-block">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
