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
                                <h4 class="card-title">Информация о нас</h4>
                                <a href="{{route('adminhome')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($content as $contents)
                                        <form action="{{route('updateinfoonas')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$contents->id}}">
                                            <div>
                                                <img style="max-width: 200px; width: 100%;" src="{{asset('infoSaite/'.$contents->logo)}}  " class="photo4">
                                                <br>
                                                <br>
                                                <input accept="image/*" style="display: none" name="logo" id="photo44" class="btn btn-outline-success" type="file">
                                                <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-warning">
                                                    Изменить логотип   </label>
                                            </div>
                                            <br>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Информация программы</label>
                                                <input name="info" placeholder="{{$contents->info}}" type="text" class="form-control" id="name"  value="{{$contents->info}}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Эл. Почта</label>
                                                <input name="email" placeholder="{{$contents->email}}" type="email" class="form-control" id="name"  value="{{$contents->email}} ">
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Номер телефона</label>
                                                <input name="phone" placeholder="{{$contents->phone}}" type="text" class="form-control" id="name"  value="{{$contents->phone}}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Ссылка Вконтакте </label>
                                                <input name="vkontakte" placeholder="{{$contents->vkontakte}}" type="text" class="form-control" id="name" value="{{$contents->vkontakte}}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Ссылка Телеграмм</label>
                                                <input name="telegram" placeholder="{{$contents->telegram}}" type="text" class="form-control" id="name" value="{{$contents->telegram}}" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Год основания</label>
                                                <input name="god" placeholder="{{$contents->god}}" type="text" class="form-control" id="name" value="{{$contents->god}}" >
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