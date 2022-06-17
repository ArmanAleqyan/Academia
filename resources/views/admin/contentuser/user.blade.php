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
                    <h4 class="card-title">Пользователи страницы</h4>
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
                            <th> Почта </th>
                            <th> Телефон</th>
                            <th> Бонус</th>
                            <th> Client Role </th>
                            <th> Дата регистраций </th>
                            <!-- <th> Payment Status </th> -->
                          </tr>
                        </thead>
                       @foreach($user as $users)

                        <tbody>


                          <tr>
                            <td>
{{--                              <img src="http://80.78.246.59/BandRate-Smart/storage/app/uploads/userphoto/{{$users->photo}}" alt="image">--}}
{{--                              <span class="pl-2"></span>--}}
                              </td>
                              <td>   <a href="{{route('oneuser', $users->id)}}">{{$users->name}}             </a></td>
                            <td> {{$users->email}} </td>
                            <td> {{$users->phone}} </td>
                            <td> {{$users->bonus}} </td>
                            @if($users->role_id == 2)
                            <td>Администратор</td>
                            @else()
                            <td>Пользователь</td>
                            @endif
                            <td> {{$users->created_at}} </td>
                            @if($users->id == auth()->user()->id)
                            
                           @else
                           <td>
                              <a href="{{route('deletuser', $users->id)}}" style="cursor:pointer; color: #d20000 !important;  border: 1px solid #d20000 !important" class="badge badge-outline-success">Удалить</a>
                            </td>

                           @endif
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