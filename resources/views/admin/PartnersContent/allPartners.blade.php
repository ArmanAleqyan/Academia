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
                        Вы удачно добавили нового партнёра</p>
                </div>
            @endif

            @if(session('delete'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно удалили партнёра</p>
                </div>
            @endif

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="    display: flex;   justify-content: space-between;">
                                <h4 class="card-title">Партнёры</h4>

                                <a href="{{route('newPartner')}}"><button style="height: 30px;" class="btn btn-outline-success">Добавить нового партнёра</button></a>

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
                                        <th> Имя </th>
                                        <th> Ссылка партнёра </th>


                                    </tr>
                                    </thead>
                        @foreach($partner as $partners)
                                        <tbody>
                                        <tr>
                                                                                        <td>
                                                                                            <img src="{{asset('partner/'.$partners->photo)}}" alt="image">
                                                                                            <span class="pl-2"></span>
                                                                                        </td>
                                            <td> {{$partners->name}}</td>
                                            <td>
                                                <a target="_blank" href="{{$partners->url}}">
                                                    <button type="button" class="btn btn-outline-info">
                                                        Ссылка партнёра
                                                    </button>
                                                </a>
                                            </td>

                                                <td>

                                                </td>

                                            <td>  </td>
                                            <td></td>
                                            <td>
                                                <a href="{{route('updatePartner', $partners->id)}}" style="cursor:pointer; " class="btn btn-outline-warning">Редактировать</a>
                                            </td>
                                            <td>
                                                <a href="{{route('deletePartner', $partners->id)}}" style="cursor:pointer;" class="btn btn-outline-danger">Удалить</a>
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