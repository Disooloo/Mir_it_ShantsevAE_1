@extends('layouts.admin_layout')
@section('title', 'Релактирование категории')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование категории: {{ $category['title'] }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Назад</a></li>
                            <li class="breadcrumb-item active">Редактирование категории</li>
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

                    <form action="{{route('category.update', $category['id'])}}" method="POST" class="w-25">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{$category['title']}}" placeholder="Название категории"/>
                        @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                        @enderror
                        </div>
                        <input type="submit" class="btn btn-block btn-success" value="Обновить">
                    </form>

                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
