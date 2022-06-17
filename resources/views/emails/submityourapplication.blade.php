<p >ФИО` {{$details['name']}} </p>
<p >Номер телефона` {{$details['phone']}} </p>
<p >Город` {{$details['city']}} </p>
@if($details['message'])
<p >Сообщение` {{$details['message']}} </p>
    @endif

