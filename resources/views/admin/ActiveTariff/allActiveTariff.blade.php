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
                        Вы удачно одобрили заявку</p>
                </div>
            @endif

            @if(session('delete'))
                <div class="succses2">
                    <p class="succsestext">
                        <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                        Вы удачно удалили активный тариф</p>
                </div>
            @endif

            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="    display: flex;   justify-content: space-between;">
                                <h4 class="card-title">
                                    Заявки на подписку</h4>
                                {{--                                <a href=""><button style="height: 30px;" class="btn btn-outline-success">Добавить отзыв</button></a>--}}

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
                                        <th> ФИО </th>
                                        <th> Название тарифа </th>
                                        <th> Цена тарифа </th>
                                    </tr>
                                    </thead>
                                    @foreach($order as $orders)
                                        <tbody>

                                        <tr>
                                            <td>

                                            </td>

                                            <td>
                                                {{$orders->user->name}}
                                            </td>
                                            <td> {{$orders->tarif->name}}</td>
                                            <td>  {{$orders->tarif->price}} </td>
                                            <td></td>
                                            <td>
                                                <a href="{{route('updateActiveTariff',  $orders->id)}}" style="cursor:pointer; " class="btn btn-outline-warning">Редактировать     </a>
                                            </td>
                                            <td>
                                                <a href="{{route('deleteActiveTariff', $orders->id)}}" style="cursor:pointer;" class="btn btn-outline-danger">Удалить</a>
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