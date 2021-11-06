@extends('layouts.admin_layout')
@section('title', 'Добавление статьи блога')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Назад</a></li>
                            <li class="breadcrumb-item active">Добавление статьи</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <form action="{{route('blog.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="title" required class="form-control" name="title" placeholder="Название статьи"/>
                                    @error('title')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label>Ссылка из источноков</label>
                                        <input type="text" class="input-group" name="link">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="text1" placeholder="Краткое описание"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="text2" class="editor" placeholder="Полное описание"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Изображение статьи</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image"
                                           name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>
                                <input type="submit" class="btn btn-block btn-success w-25" value="Добавить">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
