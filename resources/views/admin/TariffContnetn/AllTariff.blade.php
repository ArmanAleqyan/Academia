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

            @if(session('delete'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно удалили тариф</p>
                </div>
            @endif

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="    display: flex;   justify-content: space-between;">
                                <h4 class="card-title">Тарифы</h4>

                                <a href="{{'newTariff'}}"><button style="height: 30px;" class="btn btn-outline-success">Создать новый тариф</button></a>

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
                                        <th> Название тарифа </th>
                                        <th> Цена </th>
                                        <th> Количество оценок </th>
                                        <th> Срок действия </th>

                                    </tr>
                                    </thead>
                               @foreach($tariff as $tarifs)
                                        <tbody>
                                        <tr>
{{--                                            <td>--}}
{{--                                                <img src="" alt="image">--}}
{{--                                                <span class="pl-2"></span>--}}
{{--                                            </td>--}}
                                            <td></td>
                                            <td>
                                                {{$tarifs->name}}
                                            </td>
                                            <td>{{$tarifs->price}} Рублей</td>
                                            <td> {{$tarifs->estimates}} </td>
                                            <td>{{$tarifs->term}} Дней</td>
                                            <td>
                                                <a href="{{route('updateTariff', $tarifs->id)}}" style="cursor:pointer; " class="btn btn-outline-warning">Редактировать</a>
                                            </td>
                                            <td>
                                                <a href="{{route('deleteTariff', $tarifs->id)}}" style="cursor:pointer;" class="btn btn-outline-danger">Удалить</a>
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