@extends('sport.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Услуги и удобства</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-9">
                        <form action="{{route('sport.servic.store')}}" method="POST" class="w-55">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="title" class="form-control"
                                       placeholder="Добавить новую услугу и удобство">
                                <input type="hidden" name="user_id" value="{{$user}}">
                                <button type="submit" class="btn btn-dark btn-sm px-4">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </form>
                        @if(count($sportServics))
                            <ul style="background:antiquewhite;" class="list-group mt-3">
                                @foreach($sportServics as $sportServic)
                                    <li class="list-group-item justify-content-sm-between d-flex">
                                        <div class="col">
                                            <div class="d-flex justify-content-xl-between">
                                                <div><p>{{$sportServic->title}}</p></div>
                                                <div class="d-flex">
                                                    <a href="{{route('sport.servic.edit', $sportServic->id)}}"
                                                       class='text-success mr-5'>
                                                        <i class="fas fa-pencil-alt"></i></a>
                                                    <form action="{{route('sport.servic.delete', $sportServic->id)}}"
                                                          method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent" l>
                                                            <i class="fas fa-trash text-danger mr-5" role="button"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
