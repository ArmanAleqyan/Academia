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
                                <h4 class="card-title">Добавить партнёра</h4>
                                <a href="{{route('allPartners')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    <form action="{{route('createNewPartner')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Имя партнёра</label>
                                            <input  value="{{ old('name') }}" name="name" placeholder="DHL" type="text" class="form-control" id="name" >
                                        </div>
                                        @if ($errors->has('name'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="url" class="form-label">Ссылка партнёра</label>
                                            <input value="{{ old('url') }}" name="url" placeholder="DHL.com" type="url" class="form-control" id="url" >
                                        </div>
                                        @if ($errors->has('url'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('url') }}</div>
                                        @endif
                                        <br>
                                        <div>
                                            <img style="max-width: 137px; width: 100%;" src="" alt="image" id="blaha">
                                            <br>
                                            <input accept="image/*" style="display: none" name="logo" id="file-logo" class="btn btn-outline-success" type="file">
                                            <br>
                                            <label style="width: 20%;" for="file-logo" class="custom-file-upload btn btn-outline-success">
                                                Добавить  Логотип
                                            </label>
                                        </div>
                                        @if ($errors->has('logo'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('logo') }}</div>
                                        @endif




                                        <br>


                                        <button type="submit" class="btn btn-outline-success">Сохранить изменения</button>

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