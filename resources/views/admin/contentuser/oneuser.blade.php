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
            @if(session('succses'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно завершить редактирование</p>
                </div>
            @endif


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Редактировать пользователя</h4>
                                <a href="{{route('users')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($user as $tarifs)
                                        <form action="{{route('updateUser')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{$tarifs->id}}" name="userid">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">ФИО</label>
                                                <input  value="{{ $tarifs->name}}" name="name" placeholder="Минимальный" type="text" class="form-control" id="name" required>
                                            </div>


                                            <div class="mb-3">
                                                <label for="number" class="form-label">Эл.почта</label>
                                                <input value="{{ $tarifs->email}}" name="email" placeholder="9.900" type="email" class="form-control" id="number" required>
                                            </div>


                                            <div class="mb-3">
                                                <label for="oneprice" class="form-label">Номер телефона</label>
                                                <input value="{{$tarifs->phone}}" name="phone" placeholder="+7 10 48 48 2666" type="number" class="form-control" id="oneprice" required>
                                            </div>




                                            <br>


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