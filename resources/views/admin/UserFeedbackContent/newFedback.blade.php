@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')
    <style>
        input{
            color: white !important;
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>



            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Добавить отзыв</h4>
                                <a href="{{route('allFedback')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    <form action="{{route('createFedback')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Имя</label>
                                            <input  value="{{ old('name') }}" name="name" placeholder="Светлана" type="text" class="form-control" id="name" >
                                        </div>
                                        @if ($errors->has('name'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="text" class="form-label">Текст</label>
                                            <input value="{{ old('text') }}" name="text" placeholder="Очень классный проект" type="text" class="form-control" id="text" >
                                        </div>
                                        @if ($errors->has('text'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('text') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="video" class="form-label">Видео</label>
                                            <input value="{{ old('video') }}" name="video" placeholder="Копировайте HTML-код" type="text" class="form-control" id="video" >
                                        </div>
                                        @if ($errors->has('video'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('video') }}</div>
                                        @endif

                                        <br>


                                        <button type="submit" class="btn btn-outline-success">Сохранить изменения</button>

                                    </form>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection