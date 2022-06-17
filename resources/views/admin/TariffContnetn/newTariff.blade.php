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



            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Добавить тариф</h4>
                                <a href="{{route('allTariff')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    <form action="{{route('createNewTariff')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Имя тарифа</label>
                                            <input  value="{{ old('name') }}" name="name" placeholder="Минимальный" type="text" class="form-control" id="name" >
                                        </div>
                                        @if ($errors->has('name'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="number" class="form-label">Цена тарифа</label>
                                            <input value="{{ old('price') }}" name="price" placeholder="9.900" type="text" class="form-control" id="number" >
                                        </div>
                                        @if ($errors->has('price'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('price') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="oneprice" class="form-label">Цена за одну оценку</label>
                                            <input value="{{ old('oneprice') }}" name="oneprice" placeholder="99" type="number" class="form-control" id="oneprice" >
                                        </div>
                                        @if ($errors->has('oneprice'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('oneprice') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="estimates" class="form-label">Количесто оценок</label>
                                            <input value="{{ old('estimates') }}" name="estimates" placeholder="100" type="number" class="form-control" id="estimates" >
                                        </div>
                                        @if ($errors->has('estimates'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('estimates') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="term" class="form-label">Срок действия</label>
                                            <input value="{{ old('term') }}" name="term" placeholder="30" type="number" class="form-control" id="term" >
                                        </div>
                                        @if ($errors->has('term'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('term') }}</div>
                                        @endif
                                        <br>


                                        <button type="submit" class="btn btn-outline-success">Создать тариф</button>

                                    </form>
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