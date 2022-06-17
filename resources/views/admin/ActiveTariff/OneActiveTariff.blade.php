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
                        Вы удачно обновили контент</p>
                </div>
            @endif


            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex;  justify-content: space-between;">
                                <h4 class="card-title">Редактировать текущий тариф</h4>
                                <a href="{{route('activeTariff')}}"><button class="btn btn-outline-danger">Назад</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">


                                    <tbody>
                                    <br>
                                    @foreach($activeOrder as $tarifs)
                                        <div class="card text-white bg-info mb-3" style="background-color:  #444444 !important; max-width: 33rem;">
                                            <div class="card-header">Информация о клиенте</div>
                                            <div class="card-body">
                                                <h5 class="card-title">ФИО ` {{$tarifs->user->name}}</h5>
                                                <h5 class="card-title">Эл.почта ` {{$tarifs->user->email}}</h5>
                                                <h5 class="card-title">Тел ` {{$tarifs->user->phone}}</h5>

                                            </div>
                                        </div>
                                        <div class="card text-white bg-info mb-3" style="background-color: #444444 !important; max-width: 33rem;">
                                            <div class="card-header">Информация о тарифе</div>
                                            <div class="card-body">
                                                <h5 class="card-title">Название тарифа ` {{$tarifs->tarif->name}}</h5>
                                                <h5 class="card-title">Цена ` {{$tarifs->tarif->price}}</h5>
                                                <h5 class="card-title">Готово  {{$tarifs->ready_report}} ` отчета из {{$tarifs->tarif->estimates}} </h5>

                                               <?php
                                                $s = $tarifs->expiration_at;
                                                $date = strtotime($s);
                                                $time = $date - time();
                                                $day =  $time / 86400 ;
                                                $origin_day = floor($day ). ""
                                                ?>
                                                <h5 class="card-title">Осталось {{$origin_day}} дней</h5>

                                            </div>

                                        </div>
                                        <div style="display: flex; justify-content:space-between ">
                                            @if($tarifs->file != null)
                                        <a style="text-decoration: none" href="{{asset('ExeleFile/'.$tarifs->user->name.'ExeleFile/'.$tarifs->file)}}" download>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="40" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>Скачать Excel файл</a>
                                            @else
                                              <p style="cursor: unset;" class="btn btn-outline-warning">Клиент ещё не добавил файл</p>
                                            @endif
                                             @if($tarifs->filestatus != null)
                                                    <a href="{{route('updateAdminSendFileTAriff',$tarifs->id)}}"><button style="background-color:  #444444 !important; border-color: #444444;" class="btn btn-info">Дать возможность клиенту скачат новый файл</button></a>
                                                @endif
                                        </div>
                                        <br>
                                        <div style="display: flex; justify-content:space-between ">
                                            @if($tarifs->treaty != null)
                                                <a style="text-decoration: none" href="{{asset('ExeleFile/'.$tarifs->user->name.'ExeleFile/'.$tarifs->treaty)}}" download>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="40" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                    </svg>Скачать Договор</a>
                                            @else
                                                <p style="cursor: unset;" class="btn btn-outline-warning">Вы ёще не добавляли договор</p>
                                            @endif
                                        </div>
                                        <br>

                                        <br>
                                        <form action="{{route('updateAdminActiveTariff')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$tarifs->id}}">


                                            <div class="mb-3">
                                                <label for="estimates" class="form-label">Добавить количество успешных звонков</label>
                                                <input value="" name="count" placeholder="{{ $tarifs->ready_report}}" type="number" class="form-control" id="estimates" >
                                            </div>
                                            <div>
                                                <span class="rate_item_info_detail2" style="  font-size: 26px; padding-bottom: 8px;" id="MyFuleSpan"></span>
                                                <input class="sendexelefile" name="sendexelefile" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="exelefiel" type="file" style="display: none;" >
                                                <br>
                                                <label style="border-radius: 5px" class="btn btn-outline-warning" for="exelefiel">Выбрать файл</label>
                                            </div>

                                            <div>
                                                <span class="rate_item_info_detail2" style="  font-size: 26px; padding-bottom: 8px;" id="MyDogovorspan"></span>
                                                <input class="senddogovor" name="senddogovorfile"  id="dogovor" type="file" style="display: none;" >
                                                <br>
                                                <label style="border-radius: 5px" class="btn btn-outline-warning" for="dogovor">Добавить договор</label>
                                            </div>


                                            <br>


                                            <div style="display: flex;  justify-content: space-between;">
                                                <button type="submit" class="btn btn-outline-success">Сохранить изменения</button>

                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                                    Отключить тариф
                                                </button>

                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div style="background-color: #444444; border-radius: 16px;   width: 76%;" class="modal-content">
                                                            <div class="modal-header">
{{--                                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>--}}
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Вы действительно хотите отключить тариф?
                                                            </div>
                                                            <div style="justify-content: center;" class="modal-footer">
                                                                <a href="{{route('closeAdminTariff', $tarifs->id)}}"><button type="button" class="btn btn-outline-success ">Да</button></a>
                                                                <button type="button" class=" btn btn-outline-danger" data-dismiss="modal">Нет</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
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
