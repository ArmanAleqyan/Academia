@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

            </div>

            @if(session('succses'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно добавили новый контент</p>
                </div>
            @endif

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="    display: flex;   justify-content: space-between;">
                            <h4 class="card-title">Команда Team</h4>

                                <a href="{{route('newteamview')}}"><button style="height: 30px;" class="btn btn-outline-success">Добавить сотрудника</button></a>
                            </div>
                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div style="display:none;" class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </th>
                                        <th> ФИО  </th>
                                        <th> Аудио </th>
{{--                                        <th> Телефон</th>--}}
{{--                                        <th> Бонус</th>--}}
{{--                                        <th> Client Role </th>--}}
{{--                                        <th> Дата регистраций </th>--}}
                                    </tr>
                                    </thead>
                                     @foreach($team as $teams)
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{asset('team/photo/'.$teams->photo)}}" alt="image">
                                                <span class="pl-2"></span>
                                            </td>
                                            <td>{{$teams->name}}</td>
                                            <td>
                                                <audio style="height: 34px;" controls>
                                                    <source src="{{asset('team/audio/'.$teams->audio)}}" type="audio/ogg">

                                                </audio>
                                            </td>
                                            <td> </td>
                                            <td>  </td>
                                            <td> </td>
                                            <td>
                                                <a href="{{route('updateAudioview', $teams->id)}}" style="cursor:pointer; " class="btn btn-outline-warning">Редактировать</a>
                                            </td>
                                                <td>
                                                    <a href="{{route('deleteaudio', $teams->id)}}" style="cursor:pointer;" class="btn btn-outline-danger">Удалить</a>
                                                </td>
                                        </tr>

                                        </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    @endsection