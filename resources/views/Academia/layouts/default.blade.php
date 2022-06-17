<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('academia/css/style.css')}} ">
    <link rel="stylesheet" href="{{asset('academia/css/oyoplayer.css')}}">
    <link rel="icon" href="{{asset('academia/images/logo.png')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>


@yield('content')

@foreach($Contact_us as $Contact_uss)
<footer class="footer">
    <div class="footer_wrapper">
        <div class="footer_info_first_item">
            <p class="footer_info_first_item_title">
{{--                Партнерская программа для руководителей и владельца бизнеса--}}
                {{$Contact_uss->info}}
            </p>
            <nav class="footer_nav_list">
                <ul class="footer_ul_list">
                    <li class="footer_ul_li">
                        <a href="" class="footer_ul_link">Оставить заявку</a>
                    </li>
                    <li class="footer_ul_li">
                        <a href="" class="footer_ul_link">Эффективность</a>
                    </li>
                    <li class="footer_ul_li">
                        <a href="" class="footer_ul_link">Стоимость</a>
                    </li>
                    <li class="footer_ul_li">
                        <a href="" class="footer_ul_link">Отзывы</a>
                    </li>
                    <li class="footer_ul_li">
                        <a  class="submit_request footer_ul_link ">Помощь</a>
                    </li>

                </ul>

            </nav>
        </div>
        <div class="footer_info_second_item">
            <div class="footer_logo_wrapper">
                <a href="" class="footer_logo_link">
{{--                    <img src="{{asset('academia/images/footer_logo.png')}}">--}}
                    <img src="{{asset('infoSaite/'.$Contact_uss->logo)}}">
                </a>
            </div>





            <a href="mailTo:{{$Contact_uss->email}}" class="footer_mail_link">
{{--                Myteamemail@email.com--}}
                {{$Contact_uss->email}}
            </a>
            <a href="tel:{{$Contact_uss->phone}}" class="footer_phone_link">
{{--                Tel: +7-909-999-99-99--}}
                Tel:  {{$Contact_uss->phone}}
            </a>
            <div class="footer_social_links_copy_right_text_wrapper">
                <p class="footer_copy_right_text"> <span>© {{$Contact_uss->god}}</span>  My Team</p>
                <div>
                    <a target="_blank" href="{{$Contact_uss->telegram}}" class="footer_social_link">
                        <img src="{{asset('academia/images/telegram_icon.svg')}}">
                    </a>
                    <a target="_blank" href="{{$Contact_uss->vkontakte}}" class="footer_social_link">
                        <img src="{{asset('academia/images/vk_icon.svg')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{asset('academia/js/AjaxRequest.js')}} "></script>
<script src="{{asset('academia/js/script.js')}} "></script>
<script src=" {{asset('academia/js/oyoplayer.js')}}"></script>
</body>
</html>
