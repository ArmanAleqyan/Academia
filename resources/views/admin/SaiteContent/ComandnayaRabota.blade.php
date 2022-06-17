@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')


    <style>
        input{
            color: white !important;
        }
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
                                <h4 class="card-title">Командная работа</h4>
                                <a href="{{route('adminhome')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($content as $contents)
                                        <form action="{{route('updatekomandnayarabota')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$contents->id}}">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Заголовок</label>
                                                <input name="text1" placeholder="" type="text" class="form-control" id="name" value="{{$contents->text1}} " >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 1-я часть</label>
                                                <textarea name="text2" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text2}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 2-я часть</label>
                                                <textarea name="text3" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text3}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 3-я часть</label>
                                                <textarea name="text4" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text4}} </textarea>
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