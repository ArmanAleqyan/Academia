@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')


    <style>
        textarea{
            color: white !important;
            height: 140px !important;
        }

    </style>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>
            @if(session('succses'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно обновили контент</p>
                </div>
            @endif



            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Главный экран</h4>
                                <a href="{{route('adminhome')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($content as $contents)
                                    <form action="{{route('createglavniekran')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$contents->id}}">
                                        <div>
                                            <img style="max-width: 137px; width: 100%;" src="{{asset('infoSaite/'.$contents->logo)}}" alt="image" id="blaha">
                                            <br>
                                            <input accept="image/*" style="display: none" name="logo" id="file-logo" class="btn btn-outline-success" type="file">
                                            <br>
                                            <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                                Изменить логотип
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Текст 1-я часть</label>
                                            <textarea name="onetext" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->onetext}} </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Текст 2-я часть</label>
                                            <textarea name="twotext" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->twotext}} </textarea>
                                        </div>

                                        <button type="submit" class="btn btn-outline-success">Сохранить изменения</button>
                                    </form>
                                        @endforeach
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