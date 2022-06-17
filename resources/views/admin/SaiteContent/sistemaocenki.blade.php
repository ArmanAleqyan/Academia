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
                                <h4 class="card-title">Система оценки</h4>
                                <a href="{{route('adminhome')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($content as $contents)
                                        <form action="{{route('updatesistemaocenki')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$contents->id}}">
                                            <div>
                                                <img style="max-width: 200px; width: 100%;" src="{{asset('sistemaocenki/'.$contents->photo)}}" class="photo4">
                                                <br>
                                                <br>
                                                <input accept="image/*" style="display: none" name="photo" id="photo44" class="btn btn-outline-success" type="file">
                                                <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-warning">
                                                    Изменить изображение </label>
                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 1-я часть</label>
                                                <textarea name="text1" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text1}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 2-я часть</label>
                                                <textarea name="text2" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text2}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 3-я часть</label>
                                                <textarea name="text3" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text3}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 4-я часть</label>
                                                <textarea name="text4" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text4}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 5-я часть</label>
                                                <textarea name="text5" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text5}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 6-я часть</label>
                                                <textarea name="text6" placeholder="" type="text" class="form-control" id="name" >{{$contents->text6}}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 7-я часть</label>
                                                <textarea name="text7" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text7}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 8-я часть</label>
                                                <textarea name="text8" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text8}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 9-я часть</label>
                                                <textarea name="text9" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text9}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 10-я часть</label>
                                                <textarea name="text10" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text10}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 11-я часть</label>
                                                <textarea name="text11" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text11}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 12-я часть</label>
                                                <textarea name="text12" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text12}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 13-я часть</label>
                                                <textarea name="text13" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text13}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 14-я часть</label>
                                                <textarea name="text14" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text14}} </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Текст 15-я часть</label>
                                                <textarea name="text15" placeholder="Иван Иванов" type="text" class="form-control" id="name" >{{$contents->text15}} </textarea>
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