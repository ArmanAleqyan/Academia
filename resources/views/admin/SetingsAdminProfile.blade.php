@extends('layouts.default')

@section('title')

@endsection


@section('content')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>



            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form action="{{route('updateprofileadmin')}}" method="post" style=" width: 100%;">
                                    @if(session('success'))
                                    <div class="succses2">
                                        <p class="succsestext">
                                            <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                            Вы удачно завершыли Редактирование профиля</p>
                                    </div>
                                    @endif
                                    @if(session('successpassword'))
                                            <div class="succses2">
                                                <p class="succsestext">
                                                    <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                                    Вы успешно изменили пароль!</p>
                                            </div>
                                    @endif
                                        @if(session('error'))
                                            <div><p style="color: red;">неверный пароль</p></div>
                                        @endif

                                    <h1 style="display: flex; justify-content: center">Редактирование профиля</h1>
                                    <br><br>
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Имя</label>
                                        @if ($errors->has('name'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                        <input value="{{auth()->user()->name}}" name="name" type="text" class="input1 form-control" aria-describedby="emailHelp" placeholder="Имя">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Почтовый адрес</label>
                                        @if ($errors->has('email'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                        <input disabled style="color: #0a0a0a; " value="{{auth()->user()->email}}" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Почтовый адрес">

                                    </div>

                                    <button type="submit" class="btn btn-success">Редактировать профиль</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            <div  style="display: flex ; width: 100%; justify-content: center">

                                <form action="{{route('Adminupdatepassword')}}" method="post" style=" width: 100%;">

                                    <h1 style="display: flex; justify-content: center">Редактирование пароля</h1>
                                    <br><br>
                                    @csrf
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Старый пароль</label>
                                            @if ($errors->has('oldpassword'))
                                                <div  style="font-size: 13px" class="alert-danger">неверный пароль</div>
                                            @endif
                                            @if (Session::has('error'))
                                                <div  style="font-size: 13px" class="alert-danger">неверный пароль</div>
                                            @endif
                                            <input name="oldpassword"  type="password" class="form-control input1" id="exampleInputPassword1" placeholder="Пароль">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Новый пароль</label>
                                            @if ($errors->has('newpassword'))
                                                <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('newpassword') }}</div>
                                            @endif
                                            <input name="newpassword"  type="password" class="form-control input1" id="exampleInputPassword1" placeholder="Пароль">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Повторите новый пароль</label>
                                            @if ($errors->has('newpassword_confirmation'))
                                                <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('newpassword_confirmation') }}</div>
                                            @endif
                                            <input name="newpassword_confirmation"  type="password" class="input1 form-control" id="exampleInputPassword1" placeholder="Пароль">
                                        </div>


                                        <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
