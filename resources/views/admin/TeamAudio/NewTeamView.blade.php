@extends('layouts.default')
@section('title')

    Admin
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
                <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Добавить Team</h4>
                            <a href="{{route('team')}}"><button class="btn btn-outline-danger">Назад</button></a>
                </div>
                            <div class="table-responsive">
                                <table class="table">


                                        <tbody>
                                        <br>
                                        <form action="{{route('createNewTeam')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="name" class="form-label">Имя Фамилия</label>
                                                <input name="name" placeholder="Иван Иванов" type="text" class="form-control" id="name" >
                                            </div>
                                            @if ($errors->has('name'))
                                                <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                            <div>
                                                <img style="max-width: 200px; width: 100%;" src="" class="photo4">
                                                <br>
                                                <br>
                                                <input accept="image/*" style="display: none" name="photo" id="photo44" class="btn btn-outline-success" type="file">
                                                <label style="width: 20%;" for="photo44" class="custom-file-upload btn btn-outline-warning">
                                                    Добавить  Фотографию  </label>
                                            </div>
                                            @if ($errors->has('photo'))
                                                <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('photo') }}</div>
                                            @endif
                                            <div>
                                                <span id="uploadfile"></span>
                                                <br>
                                            <label class="btn btn-outline-warning form-label audiofile" for="audio" >Добавить аудиофайл</label>
                                            <input  accept=".mp3,audio/*" style="display: none" placeholder="Иван Иванов" type="file" class="form-control audiofile" name="audio" id="audio">
                                            </div>
                                            @if ($errors->has('audio'))
                                                <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('audio') }}</div>
                                            @endif
                                            <br>
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