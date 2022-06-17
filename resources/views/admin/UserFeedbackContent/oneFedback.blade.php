@extends('layouts.default')
@section('title')

    Admin
@endsection

@section('content')
    <style>
        input{
            color: white !important;
        }
        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #fff;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }
        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }
        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(24px, 0);
            }
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
                        Вы удачно обновили отзыв</p>
                </div>
            @endif


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">обновить отзыв</h4>
                                <a href="{{route('allFedback')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($update as $updates)
                                    <form  id="upload-image-form"
                                            action="{{route('createupdateFedback', $updates->id)}}" method="post"
                                            enctype="multipart/form-data"
                                    >
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $updates->id }}">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Имя</label>
                                            <input  value="{{ $updates->name }}" name="name" placeholder="Светлана" type="text" class="form-control" id="name" >
                                        </div>
                                        @if ($errors->has('name'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('name') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="text" class="form-label">Текст</label>
                                            <input value="{{ $updates->content }}" name="text" placeholder="Очень классный проект" type="text" class="form-control" id="text" >
                                        </div>
                                        @if ($errors->has('text'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('text') }}</div>
                                        @endif

                                        <div class="mb-3">
                                            <iframe width="450" height="250" {{$updates->video  }} title="YouTube video player"
                                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                                                                                    gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                            <br>
                                            <label for="video" class="form-label">Видео</label>
                                            <input value="{{ $updates->video }}" name="video" placeholder="{{$updates->video}}" type="text" class="audiofile form-control" id="video" >
                                        </div>

                                        @if ($errors->has('video'))
                                            <div  style="font-size: 13px" class="alert-danger">{{ $errors->first('video') }}</div>
                                        @endif

                                        <br>

                                        <div style="display: none" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                                        <button type="submit" class="noneButton btn btn-outline-success">Сохранить изменения</button>

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