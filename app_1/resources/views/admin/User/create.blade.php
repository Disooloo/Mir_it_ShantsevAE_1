@extends('layouts.admin_layout')
@section('title', 'Добавление пользователя')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Назад</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                            <form action="{{route('user.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="name" placeholder="Ваше имя"/>
                                    @error('name')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="email" placeholder="Email"/>
                                    @error('email')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control" name="password" placeholder="Ваше пароль"/>
                                    @error('password')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
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
