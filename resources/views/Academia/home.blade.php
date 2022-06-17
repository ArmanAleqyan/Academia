@extends('academia.layouts.default')
@section('title')
GROUPAUTO
    @endsection
@section('content')

<div class="my_team_main_wrapper" id="main_page">
    <header class="header">
        <div class="header_wrapper">
            <div class="header_logo_wrapper">
                @foreach($content_header as $content_headerss)
                <a href="" class="header_logo_link">
                    <img src="{{asset('infoSaite/'.$content_headerss->logo)}}">
                </a>
                @endforeach
            </div>
            <nav class="header_nav_list">
                <ul class="header_ul_list">
                    <li class="header_ul_li">
                        <a href="#leave_a_request" class="header_ul_link">Оставить заявку</a>
                    </li>
                    <li class="header_ul_li">
                        <a href="#result" class="header_ul_link">Эффективность</a>
                    </li>
                    <li class="header_ul_li">
                        <a href="#rate_section" class="header_ul_link">Стоимость</a>
                    </li>
                    <li class="header_ul_li">
                        <a href="#reviews" class="header_ul_link">Отзывы</a>
                    </li>
                </ul>
            </nav>


            <div class="hamburger_menu_sign_in_buttons_wrapper">
                 @if(auth()->user())
                    <a style="text-decoration: none" href="{{route('personalarea')}}"><button class="sign_in_btna">Личный кабинет</button></a>
                @else
                    <button class="sign_in_btn">Войти</button>
                    <a href="" class="private_office_link">Личный кабинет</a>
                    <div class="hamburger_menu">
                        <span class="hamburger_menu_line"></span>
                        <span class="hamburger_menu_line"></span>
                        <span class="hamburger_menu_line"></span>
                    </div>
                     @endif



            </div>


            <div class="mobile_version_popup">
                <div class="mobile_version_popup_wrapper">
                    <div class="mobile_version_popup_close">
                        <svg width="22" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="#DB9BF9"/>
                        </svg>

                    </div>
                    <nav class="mobile_header_nav_list">
                        <ul class="header_ul_list">
                            <li class="header_ul_li">
                                <a href="#leave_a_request" class="header_ul_link">Оставить заявку</a>
                            </li>
                            <li class="header_ul_li">
                                <a href="#result" class="header_ul_link">Эффективность</a>
                            </li>
                            <li class="header_ul_li">
                                <a href="#rate_section" class="header_ul_link">Стоимость</a>
                            </li>
                            <li class="header_ul_li">
                                <a href="#reviews" class="header_ul_link">Отзывы</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sign_in_popup">
            <div class="sign_in_popup_wrapper">
                <div class="sign_in_popup_close">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                    </svg>
                </div>
                <div class="sign_in_popup_items">
                    <div class="sign_in_popup_img_item">
                        <img src="{{asset('academia/images/popup_img.png')}}">
                    </div>
                    <form action="" class="sign_in_popup_form">

                        <div class="sign_in_popup_logo_img">
                            <img src="{{asset('academia/images/popup_logo.png')}}">
                        </div>

                        <h1 class="sign_in_popup_title">Вход</h1>

                        <div class="sign_in_form_input_main_wrapper">
                            <div class="sign_in_form_input_wrapper">
                                <div class="registererror" id="email2error"></div>
                                <input name="email" type="text" placeholder="Эл. Почта" class="sign_in_form_input_field">

                            </div>
                            <div class="sign_in_form_input_wrapper">
                                <div class="registererror" id="password2error"></div>

                                <input name="password" type="password" placeholder="Пароль" class="sign_in_form_input_field">
                                <div class="registererror" id="notuser"></div>
                                <a class="zabilparol" style="display: flex;  justify-content: end;  color: #7560b8;  text-decoration: none;" href="">Забыли пароль?</a>
                            </div>

                        </div>
                        <button class="sign_in_popup_btn" type="submit">Войти</button>
                        <button class="sign_up_popup_btn" type="button">Регистрация</button>
                    </form>
                </div>

            </div>
        </div>
        <div class="change_email_popup_code">
            <div class="change_password_popup_wrapper">
                <div class="change_password_popup_close">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                    </svg>

                </div>
                <div class="change_password_popup_items">
                    <div class="change_password_popup_img_item">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>
                    <form action="" id="sendcodeemail" class="change_password_popup_form  change_email_input_popup_form">
                        <div class="change_password_popup_logo_img">
                            <img src="{{asset('academia/images/popup_logo.png')}}">
                        </div>

                        <h1 class="change_password_popup_title">Введите вашу Эл.почту</h1>

                        <div class="change_password_form_input_main_wrapper">
                            <div class="change_password_form_input_wrapper">
                                <div class="registererror" id="forgotemailnote"></div>
                                <input name="forgotemail" type="email" placeholder="Эл.почта" class="change_password_form_input_field  change_email_input" required>

                            </div>

                        </div>



                        <button class="change_email_btn_popup" type="submit">Подтвердить</button>

                    </form>
                </div>

            </div>
        </div>
        <div class="sign_up_popup">
            <div class="sign_up_popup_wrapper">
                <div class="sign_up_popup_close">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                    </svg>

                </div>
                <div class="sign_up_popup_items">
                    <div class="sign_up_popup_img_item">
                        <img src="{{asset('academia/images/popup_img.png')}}">
                    </div>
                    <form  class="sign_up_popup_form">
@csrf
                        <div class="sign_up_popup_logo_img">
                            <img src="{{asset('academia/images/popup_logo.png')}}">
                        </div>
                        <h1 class="sign_up_popup_title">Регистрация</h1>

                        <div  class="sign_up_form_input_main_wrapper">
                            <div style="margin-bottom: 20px;" class=" sign_up_form_input_wrapper">
                                <div class="registererror" id="nameerror"></div>
                                <input name="registername" type="text" placeholder="ФИО"  class="sign_up_form_input_field">

                            </div>

{{--                            <div class="sign_up_form_input_wrapper">--}}
{{--                                <input name="jobtitle" type="text" placeholder="Должность"  class="sign_up_form_input_field">--}}
{{--                                <div id="jobtitle"></div>--}}
{{--                            </div>--}}
                            <div style="margin-bottom: 20px;" class="sign_up_form_input_wrapper">
                                <div class="registererror" id="phoneerror"></div>
                                <input name="registerphone" type="number" placeholder="Номер телефона контактого лица"  class="sign_up_form_input_field">

                            </div>

                            <div style="margin-bottom: 20px;" class="sign_up_form_input_wrapper">
                                <div class="registererror" id="emailerror"></div>
                                <input name="registeremail" type="email" placeholder="Эл адрес" class="sign_up_form_input_field">

                            </div>
{{--                            <div class="sign_up_form_input_wrapper">--}}
{{--                                <input name="city" type="text" placeholder="Город" class="sign_up_form_input_field">--}}
{{--                            </div>--}}

                            <div style="margin-bottom: 20px;" class="sign_up_form_input_wrapper">
                                <div class="registererror passworderror" id="passworderror"></div>
                                <input name="registerpassword" type="password" placeholder="Пароль" class="sign_up_form_input_field">

                            </div>
                            <div style="margin-bottom: 20px;" class="sign_up_form_input_wrapper">
                                <div class="registererror passworderror" id="passworderror"></div>
                                <input name="registerpassword_confirmation" type="password" placeholder="Подтверждение пароля" class="sign_up_form_input_field">
                            </div>
                            <div class="registererror" id="checkboxerror"></div>
                            <div style="margin-bottom: 20px;" class="sign_up_form_check_input_wrapper">

                                <input type="checkbox" name="registercheckbox" id="sign_up_form_check_input_field" hidden >
                                <label for="sign_up_form_check_input_field" class="sign_up_form_check_input_label">
                                </label>
                                <p class="sign_up_form_check_input_label_text">Я согласен
                                    <a  style="text-decoration: none" ><span>с правилаим работы сервиса</span></a>

                                </p>

                            </div>




                        </div>




                        <button class="sign_up_popup_btn2">Зарегистрироваться</button>
                    </form>
                </div>

            </div>
        </div>
    </header>
    <main>
        <div class="top">
            <div class="top_wrapper">

                @foreach($content_header as $content_headers)
                <div class="top_info_item">
                    <h1 class="top_info_title">{{$content_headers->onetext}}
{{--                         Команда My Team проводит специализированный опрос--}}
                    </h1>
                    <div class="top_info_line"></div>
                    <p class="top_info_text">
                        {{$content_headers->twotext}}
{{--                        Увеличьте лояльность клиентов и позвольте--}}
{{--                        работать Вашему бизнесу более эффективно--}}
                    </p>
                    <button class="submit_request">Оставить заявку</button>
                </div>
                @endforeach
                <div class="top_img_item">
                    <img src="{{asset('academia/images/top_img1.png')}}">
                </div>
            </div>
            <div class="submit_request_popup">
                <div class="submit_request_popup_wrapper">
                    <div class="submit_request_popup_close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                        </svg>

                    </div>
                    <div class="submit_request_popup_items">
                        <div class="submit_request_popup_img_item">
                            <img src="{{asset('academia/images/popup_img.png')}}">
                        </div>
                        <form action="" id="obratnizvanok" class="submit_request_popup_form">
                            <div class="submit_request_popup_logo_img">
                                <img src="{{asset('academia/images/popup_logo.png')}}">
                            </div>

                            <h1 class="submit_request_popup_title">Оставить заявку</h1>
                            <p class="submit_request_popup_info">*Мы не передаем данные третьим лицам!</p>

                            <div class="submit_request_form_input_wrapper">
                                <input name="emailname" type="text" placeholder="ФИО" class="submit_request_form_input_field" required>
                            </div>
                            <div class="submit_request_form_input_wrapper">
                                <input name="emailphone" type="number" placeholder="Номер телефона" class="submit_request_form_input_field" required>
                            </div>
                            <div class="submit_request_form_input_wrapper">
                                <input name="emailcity" type="text" placeholder="Город" class="submit_request_form_input_field" required>
                            </div>

                            <div style="display: none;" class="registererror" id="emailcheckerror">Обязательное поле</div>
                            <div class="submit_request_form_check_input_wrapper">
                                <input type="checkbox" name="emailcheckbox" id="submit_request_form_check_input_field" hidden>
                                <label for="submit_request_form_check_input_field" class="submit_request_form_check_input_label" >
                                </label>
                                <p class="submit_request_form_check_input_label_text">Я согласен <span>с правилаим работы сервиса</span>  </p>
                            </div>

                            <button class="submit_request_form_order_call">Заказать звонок</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @foreach($result as $results)
        <div class="result" id="result">
            <div class="result_wrapper">
                <div class="result_items_wrapper">
                    <div class="result_item_first">
                        <div class="result_item_icon_info">
                            <div class="result_item_icon">
                                <svg width="121" height="136" viewBox="0 0 121 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M52.7847 133.109C52.2859 134.955 50.3856 136.059 48.5641 135.478C39.3482 132.538 30.8347 127.731 23.5709 121.348C15.4428 114.205 9.10246 105.285 5.05146 95.2937C1.00046 85.302 -0.650079 74.5128 0.230405 63.7794C1.11089 53.0461 4.49824 42.6631 10.1245 33.4518C15.7508 24.2406 23.4616 16.4538 32.647 10.7074C41.8324 4.96104 52.2404 1.41272 63.0476 0.343173C73.8549 -0.72638 84.7649 0.712172 94.9146 4.54503C103.963 7.96188 112.185 13.1979 119.072 19.9101C120.459 21.2621 120.36 23.4906 118.929 24.7957C117.514 26.0852 115.332 25.9856 113.955 24.6561C107.8 18.7128 100.475 14.0717 92.4231 11.0311C83.2884 7.58156 73.4694 6.28687 63.7429 7.24946C54.0163 8.21206 44.6492 11.4055 36.3823 16.5773C28.1154 21.749 21.1757 28.7572 16.1121 37.0473C11.0484 45.3374 7.9998 54.6821 7.20736 64.3421C6.41493 74.0021 7.90042 83.7124 11.5463 92.7049C15.1922 101.697 20.8985 109.725 28.2138 116.154C34.6572 121.816 42.1933 126.1 50.3504 128.756C52.1795 129.351 53.2865 131.253 52.7847 133.109Z" fill="url(#paint0_linear_401_16)" fill-opacity="0.9"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_401_16" x1="70" y1="0" x2="70" y2="138.812" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#9CA5DC"/>
                                            <stop offset="0.526042" stop-color="#8C9AE8" stop-opacity="0.943066"/>
                                            <stop offset="1" stop-color="#7281D8"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                            </div>
{{--                            <p class="result_item_info"> <span>Net Promoter Score</span> - система оценки удоволетворенности клиентов.</p>--}}
                            <p class="result_item_info"> {{$results->text1}}</p>
                        </div>
                        <div class="result_item_img">
{{--                            <img src="{{asset('academia/images/result_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$results->photo)}}">
                        </div>
                    </div>
                    <div class="result_item_second">
                        <div class="result_item_second_icon">
                            <img src="{{asset('academia/images/result_img5.png')}}">

                        </div>
{{--                        <p class="result_item_second_info1">С помощью опроса <span>NPS</span>  у Вас будет возможность анализировать комментарии Ваших клиентов и качество работы Вашего бизнеса</p>--}}
                        <p class="result_item_second_info1">{{$results->text2}}</p>
{{--                        <p class="result_item_second_info2">Посмотрите на свой бизнес глазами клиента</p>--}}
                        <p class="result_item_second_info2">{{$results->text3}}</p>
                    </div>

                </div>
                <div class="result_third_item">
                    <div class="result_third_item_child_box">
                        <div class="result_third_item_child1">
                            <div class="result_title_line_main_wrapper">
                                <div class="result_title_line_wrapper">
{{--                                    <h1 class="result_third_item_child_title">Результат</h1>--}}
                                    <h1 class="result_third_item_child_title">{{$results->text4}}</h1>
                                    <div class="result_title_line"></div>
                                </div>

                                <p class="result_third_item_child_info">
{{--                                    Ваш результат после--}}
{{--                                    внедрения показателей--}}
{{--                                    NPS--}}
                                    {{$results->text5}}
{{--                                    <span>*Индекса потребительской лояльности</span>--}}
                                    <span>{{$results->text6}}</span>
                                </p>
                            </div>

{{--                            <a href="" class="our_cases_link">Наши кейсы</a>--}}
                            <a href="" class="our_cases_link">Наши кейсы</a>

                        </div>
                        <div class="result_third_item_child2">
                            <div class="result_third_item_child2_line"></div>
                            <div class="result_third_item_child2_box">
{{--                                <h2 class="result_third_item_child_title2">Ваши клиенты будут довольны</h2>--}}
                                <h2 class="result_third_item_child_title2">{{$results->text7}}</h2>
                                <div class="result_third_item_child_text_icon">
                                    <div class="result_third_item_child_icon">
                                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8C0EBA"/>
                                                    <stop offset="1" stop-color="#4153B9"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </div>
{{--                                    <p class="result_third_item_child_text">Они будут уверены что их мнение важно для Вас</p>--}}
                                    <p class="result_third_item_child_text">{{$results->text8}}</p>
                                </div>
                                <div class="result_third_item_child_text_icon">
                                    <div class="result_third_item_child_icon">
                                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8C0EBA"/>
                                                    <stop offset="1" stop-color="#4153B9"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </div>
{{--                                    <p class="result_third_item_child_text">--}}
{{--                                        Доступ ко всем комментариям Ваших клиентов, получивших положительный, нейтральный и негативный опыт--}}
{{--                                    </p>--}}
                                    <p class="result_third_item_child_text">
                                      {{$results->text9}}          </p>

                                </div>
                            </div>
                            <div class="result_third_item_child2_box">
{{--                                <h2 class="result_third_item_child_title2">Индекс лояльности клиентов</h2>--}}
                                <h2 class="result_third_item_child_title2">{{$results->text10}}</h2>
                                <div class="result_third_item_child_text_icon">
                                    <div class="result_third_item_child_icon">
                                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8C0EBA"/>
                                                    <stop offset="1" stop-color="#4153B9"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </div>
{{--                                    <p class="result_third_item_child_text">Ваша актуальная база клиентов,готовых всегда к вам вернуться и порекомендовать Вас своим знакомым и друзьям.</p>--}}
                                    <p class="result_third_item_child_text">{{$results->text11}}</p>
                                </div>
                                <div class="result_third_item_child_text_icon">
                                    <div class="result_third_item_child_icon">
                                        <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#8C0EBA"/>
                                                    <stop offset="1" stop-color="#4153B9"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>

                                    </div>
                                    <p class="result_third_item_child_text">
{{--                                        Возможность проработки пожеланий и внедрения их в свой бизнес для увеличения клиентоориентированности--}}
                                        {{$results->text12}}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="result_third_item_child3">
{{--                        <h2 class="result_third_item_child3_title">Зоны роста Ваших сотрудников</h2>--}}
                        <h2 class="result_third_item_child3_title">{{$results->text13}}</h2>
                        <div class="result_third_item_child3_second_wrapper">
                            <div class="result_third_item_child3_text_icon">
                                <div class="result_third_item_child_icon">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#8C0EBA"/>
                                                <stop offset="1" stop-color="#4153B9"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </div>
                                <p class="result_third_item_child3_text">
{{--                                    Благодаря прозрачной и углубленной аналитике,Вы будете понимать над чем именно стоит поработать,чтобы улучшить результаты сотрудника и Вашего бизнеса в целом.--}}
                                    {{$results->text14}}
                                </p>
                            </div>
                            <div class="result_third_item_child3_text_icon">
                                <div class="result_third_item_child_icon">
                                    <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 2L7.9375 18L2 10.7273" stroke="url(#paint0_linear_18_221)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_18_221" x1="12" y1="-8" x2="12.228" y2="27.4985" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#8C0EBA"/>
                                                <stop offset="1" stop-color="#4153B9"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </div>
                                <p class="result_third_item_child3_text">
{{--                                    У Вас будет персональный менеджер в Telegram, который мгновенно оповестит Вас о важном комментарии со стороны клиента--}}
                                    {{$results->text15}}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="result_line"></div>
                </div>
            </div>
        </div>
        @endforeach
@foreach($comand_content as $comand_contents)
        <div class="my_team_img_parent">
            <div class="my_team_img">
{{--                <img src="{{asset('academia/images/my_team_img10.png')}}">--}}
                <img src="{{asset('sistemaocenki/'.$comand_contents->logo)}}">
            </div>
        </div>
        @endforeach
        <div class="my_team">
            <div class="my_team_wrapper">
                <h1 class="my_team_title">
{{--                    КОМАНДА MYTEAM--}}
                    {{$comand_contents->text2}}
                </h1>
                <div class="my_team_line"></div>
                <p class="my_team_info">
{{--                    <span>Наша команда</span>    - это уникальный Call-центр, который имеет многолетний и богатый опыт работы в сфере автобизнеса. Именно наши специалисты знают как правильно вести коммуникацию с Вашими клиентами чтобы добиться высокого результата--}}
                    {{$comand_contents->text3}}
                </p>

                <div class="my_team_items_wrapper">
                    @foreach($team_audio_content as $team_audio_contents)
                    <div class="my_team_item">
                        <div class="my_team_item_img">
                            <img src="{{asset('team/photo/'.$team_audio_contents->photo)}}">
                        </div>
                        <p class="my_team_item_name">{{$team_audio_contents->name}}</p>
                        <div class="audio_parent">
                            <audio id="music1" controls="controls" controlsList="nodownload">
                                <source src="{{asset('team/audio/'.$team_audio_contents->audio)}}" type="audio/ogg" />
{{--                                <source src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" type="audio/mpeg" />--}}
                            </audio>
                        </div>

                    </div>
                    @endforeach
{{--                    <div class="my_team_item">--}}
{{--                        <div class="my_team_item_img">--}}
{{--                            <img src="{{asset('academia/images/my_team_img2.png')}}">--}}
{{--                        </div>--}}
{{--                        <p class="my_team_item_name">Светлана Чехова </p>--}}

{{--                        <div class="audio_parent">--}}
{{--                            <audio id="music2" controls="controls" controlsList="nodownload">--}}
{{--                                <source src="{{asset('academia/music/onlyidreamwithyou1.ogg')}}" type="audio/ogg" />--}}
{{--                                <source src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" type="audio/mpeg" />--}}
{{--                            </audio>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="my_team_item">--}}
{{--                        <div class="my_team_item_img">--}}
{{--                            <img src="{{asset('academia/images/my_team_img3.png')}}">--}}
{{--                        </div>--}}
{{--                        <p class="my_team_item_name">Алексей Смирнов</p>--}}
{{--                        <div class="audio_parent">--}}
{{--                            <audio id="music3" controls="controls" controlsList="nodownload">--}}
{{--                                <source src="music/onlyidreamwithyou1.ogg" type="audio/ogg" />--}}
{{--                                <source src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" type="audio/mpeg" />--}}
{{--                            </audio>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                    <div class="my_team_item">--}}
{{--                        <div class="my_team_item_img">--}}
{{--                            <img src="{{asset('academia/images/my_team_img4.png')}}">--}}
{{--                        </div>--}}
{{--                        <p class="my_team_item_name">Маша Миногарова</p>--}}
{{--                        <div class="audio_parent">--}}
{{--                            <audio id="music4" controls="controls" controlsList="nodownload">--}}
{{--                                <source src="music/onlyidreamwithyou1.ogg" type="audio/ogg" />--}}
{{--                                <source src="https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3" type="audio/mpeg" />--}}
{{--                            </audio>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div>
            </div>
        </div>
@foreach($choose_us  as $choose_uss)
        <div class="why_choose_us">
            <div class="why_choose_us_wrapper">
                <div class="why_choose_us_items_wrapper">
                    <div class="why_choose_us_item">
                        <h1 class="why_choose_us_title">
{{--                            Почему--}}
{{--                            Выбирают  Нас--}}
                            {{$choose_uss->text1}}
                        </h1>
                    </div>
                    <div class="why_choose_us_item2">
                        <div class="why_choose_us_item_child">
                            <div class="why_choose_us_item_child_icon_info">

{{--                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}"> </span>Собираем более 15000 оценок качества обслуживания. </span>--}}
                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}"> </span>{{$choose_uss->text2}}</span>
{{--                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}"> </span>Даём возможность индивидуального редактирования скриптов опроса</span>--}}
                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}"> </span>{{$choose_uss->text3}}</span>
                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                    </span>Предоставляем полную отчетность о проделанной работе.</span>--}}
                                        </span>{{$choose_uss->text4}}</span>
                                <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                    </span>В своей работе используем современное оборудование и специальное ПО, которое позволяет оперативно обрабатывать полученную информацию</span>--}}
                                </span>{{$choose_uss->text5}}</span>
                            </div>
                        </div>
                        <div class="why_choose_us_item_child">
                            <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                </span>Помогаем удержать клиентов и укрепляем имидж компании.</span>--}}
                                     </span>{{$choose_uss->text6}}</span>
                            <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                </span>Наличие обратной связи от ведущего бизнес тренера Everycar</span>--}}
                                     </span>{{$choose_uss->text7}}</span>
                            <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                </span>Контролируем качество обслуживания. Работает собственная служба качества, которая проверяет результативность сотрудников Call-центра </span>--}}
                                     </span>{{$choose_uss->text8}}</span>
                            <span class="why_choose_us_item_child_info"><span class="why_choose_item_child_img"><img src="{{asset('academia/images/why_us_item.png')}}">
{{--                                </span> Добились максимального ответа клиентов 80%. </span>--}}
                                  </span>{{$choose_uss->text9}} </span>
                        </div>
                    </div>
                </div>
                <div class="why_choose_line"></div>
            </div>
        </div>
        @endforeach

        <div class="rate" id="rate_section">
            <div class="rate_wrapper">
                @foreach($tarifs_content as $tarifs_contents)
                <div class="rate_line_titles_wrapper">
{{--                    <h1 class="rate_title1">Выберите подходящий для Вас тариф</h1>--}}
                    <h1 class="rate_title1">{{$tarifs_contents->text1}}</h1>
                    <div class="rate_line"></div>
{{--                    <p class="rate_title2">Вы платите только за результат.Если клиент отказывается ставить оценку и не--}}
{{--                        даёт комментариев, данный опрос не считается состоявшимся. </p>--}}
                    <p class="rate_title2">{{$tarifs_contents->text2}} </p>
                </div>
                @endforeach
                <div class="rate_items_wrapper">
@foreach($tarifs as $tarif)
                    <div class="rate_item">
{{--                        <h2 class="rate_item_title">Минимальный</h2>--}}
                        <h2 class="rate_item_title">{{$tarif->name}}</h2>
{{--                        <p class="rate_item_price_info">9.900 Рублей</p>--}}
                        <p class="rate_item_price_info">{{$tarif->price}} Рублей</p>
                        <div class="rate_item_info_details_wrapper">
                            <ul class="rate_item_info_details_ul_list">
{{--                                <li class="rate_item_info_detail">99 Рублей за оценку</li>--}}
                                <li class="rate_item_info_detail">{{$tarif->oneprice}} Рублей за оценку</li>
                                <li class="rate_item_info_detail">{{$tarif->estimates}} Оценок</li>
{{--                                <li class="rate_item_info_detail">Срок действия тарифа--}}
{{--                                    30 дней</li>--}}
                                <li class="rate_item_info_detail">Срок действия тарифа
                                    {{$tarif->term}} дней</li>
                            </ul>
                        </div>
                        @if(auth()->user())
                        <a href="{{route('personalarea')}}" class="rate_item_link">Купить</a>
                            @else
                            <a  class="rate_item_link sign_in_btn">Купить</a>
                        @endif
                    </div>
@endforeach
{{--                    <div class="rate_item">--}}
{{--                        <h2 class="rate_item_title">Начальный</h2>--}}
{{--                        <p class="rate_item_price_info">17.800 Рублей</p>--}}
{{--                        <div class="rate_item_info_details_wrapper">--}}
{{--                            <ul class="rate_item_info_details_ul_list">--}}
{{--                                <li class="rate_item_info_detail">89 Рублей за оценку</li>--}}
{{--                                <li class="rate_item_info_detail">200 Оценок</li>--}}
{{--                                <li class="rate_item_info_detail">Срок действия тарифа--}}
{{--                                    45 дней</li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
{{--                        <a href="" class="rate_item_link">Купить</a>--}}
{{--                    </div>--}}
{{--                    <div class="rate_item">--}}
{{--                        <h2 class="rate_item_title">Стандарт</h2>--}}
{{--                        <p class="rate_item_price_info">23.700 Рублей</p>--}}
{{--                        <div class="rate_item_info_details_wrapper">--}}
{{--                            <ul class="rate_item_info_details_ul_list">--}}
{{--                                <li class="rate_item_info_detail">79 Рублей за оценку</li>--}}
{{--                                <li class="rate_item_info_detail">300 Оценок</li>--}}
{{--                                <li class="rate_item_info_detail">Срок действия тарифа--}}
{{--                                    60 дней</li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
{{--                        <a href="" class="rate_item_link">Купить</a>--}}
{{--                    </div>--}}
{{--                    <div class="rate_item">--}}
{{--                        <h2 class="rate_item_title">VIP</h2>--}}
{{--                        <p class="rate_item_price_info">от 34.500 Рублей</p>--}}
{{--                        <div class="rate_item_info_details_wrapper">--}}
{{--                            <ul class="rate_item_info_details_ul_list">--}}
{{--                                <li class="rate_item_info_detail">69 Рублей за оценку</li>--}}
{{--                                <li class="rate_item_info_detail">500 Оценок</li>--}}
{{--                                <li class="rate_item_info_detail">Срок действия тарифа--}}
{{--                                    90 дней</li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}
{{--                        <a href="" class="rate_item_link">Связаться</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="our_partners">
            <div class="our_partners_wrapper">
                <div class="our_partners_title_line_wrapper">
                    <h1 class="our_partners_title">Наши партнёры</h1>
                    <div class="our_partners_line">

                    </div>

                </div>
                <div  class="our_partners_swiper_btn_wrapper">
                    <div class="swiper" id="our_partners_swiper">
                        <div class="swiper-wrapper" style="height: auto;">
@foreach($partners as $partner)
                        <div class="swiper-slide">
                            <a target="_blank" style="text-decoration: none" href="{{$partner->url}}">   <div class="swiper_slide_img" >
                                    <img src="{{asset('partner/'.$partner->photo)}}">
                                </div></a>
                        </div>
@endforeach

{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="{{asset('academia/images/slider_img1.png')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="{{asset('academia/images/slider_img1.png')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="{{asset('academia/images/slider_img1.png')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="{{asset('academia/images/slider_img1.png')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="{{asset('academia/images/slider_img7.png')}}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../images/slider_img8.png">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../images/slider_img9.png">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../images/slider_img10.png">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../images/slider_img11.png">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="swiper_slide_img">--}}
{{--                                    <img src="../images/slider_img12.png">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="swiper-pagination_wrapper">
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>
        </div>
@foreach($comandnayarabota as $comandnayarabotas)
        <div class="about_us">
            <div class="about_us_wrapper">
                <div class="about_us_items_wrapper">
                    <div class="about_us_first_item">
                        <div class="about_us_first_item_img">
                            <img src="{{asset('academia/images/about_us_img.png')}}">
                        </div>
                        <p  class="about_us_first_item_info">
{{--                            Только командная работа позволит за 3 шага выстроить постоянные отношения с клиентом--}}
                     {{$comandnayarabotas->text1}}
                        </p>

                    </div>
                    <div class="about_us_second_item_line"></div>
                    <div class="about_us_second_item">
                        <div class="about_us_second_item_child">
                            <div class="about_us_second_item_child_title_line_box">
                                <p class="about_us_second_item_title">МЫ</p>
                                <div class="about_us_second_item_child_line"></div>
                            </div>

                            <div class="about_us_second_item_child_icon_info_wrapper">
                                <div class="about_us_second_item_child_icon">
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="70" height="70" fill="url(#pattern0)"/>
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_197_60" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_197_60" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>
                                </div>
                                <p  class="about_us_second_item_child_info">
{{--                                    Совершаем звонок вашему клиенту после визита в Вашу организацию--}}
                                {{$comandnayarabotas->text2}}
                                </p>
                            </div>
                            <div class="about_us_second_item_child_icon_info_wrapper">
                                <div class="about_us_second_item_child_icon">
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="70" height="70" fill="url(#pattern1)"/>
                                        <defs>
                                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_524_4" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_524_4" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                                        </defs>
                                    </svg>

                                </div>
                                <p  class="about_us_second_item_child_info">
{{--                                    Анализируем полученные данные и предоставляем вам полный отчёт по комментариям ваших клиентов--}}
                                {{$comandnayarabotas->text3}}
                                </p>
                            </div>
                        </div>

                        <div class="about_us_second_item_child">
                            <div class="about_us_second_item_child_title_line_box">


                                <p class="about_us_second_item_title">ВЫ</p>
                                <div class="about_us_second_item_child_line"></div>
                            </div>
                            <div class="about_us_second_item_child_icon_info_wrapper">
                                <div class="about_us_second_item_child_icon">
                                    <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="70" height="70" fill="url(#pattern2)"/>
                                        <defs>
                                            <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_524_2" transform="scale(0.00195312)"/>
                                            </pattern>
                                            <image id="image0_524_2" width="512" height="512" xlink:href="data:image/png;base64,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q0xRI89GjYiaNSPRtClR06ZETZoQeS3jnZREP/9MeOwx4VOpKdXipMsuIxoyRA1mwklqKiE+nsT69YT4eKL160nExxM2bxa+tDTbrQslyAIFSNSpQ2jQgESDBkRxcYT69dX/O9yyh/79N9GoUUS//ppVxheyTh0SL71EdOWV7n5qzMnx42qN1sqVhJUriVasILFmjRDJybZbZgpkuXIkWrZUN/ysf+XK2W5X4NauJXr+eSFOy/x3mjzz9aunyn79CCNGkPB6BaqjRwkbN5JYv55owwaijRuJ1q9388UXqFSJKDaWEBtLVKMGiYYN1c2+bl1vT3+mpRG+/ZbEq68KsWFD7vE3b050//1E11zjnZF2MDIy1NPhtm1EW7cStm4l2raNxNathJ07he/wYdstDAZk2bIkqlYl1KypXj/FxhLVrKn+1aihZnzCVXIy0bhxRO++K8SyZbn2EerVIzzyCIkbb/T2mpzMTHVdXblSDXKzzudt24TYt89263Ly3yCU6tVT19R69dQgtF49opIlbbdPL7h//iExciTRb7/lNVvjd8EeoEsXNU3bq5ft2MzKzCRs305i716iffuI9u9X//buJTp4kLBnD4mDB4kSEkysNYAsWJBEqVKE0qWJSpUi8e//pbJliapWVTf72FgSNWqE3U0Pp06RR9zgBAAACU1JREFU+PRTwhtvZK1C9evPUKoU0aBBRHfcoV0D25NSU9W5uWePOjf37CE6eJDo6FGiI0eIDh9WA9wjR0icPKnOVbNTtOphoEQJQpEiZ56z/57LomxZ9cqpYkX1fytUCL8neX86av16Ep98QvT110IcPer3n8kqVUgMG0a4/XYShQvbDsOslJTsAe727US7dhEdOkR05Ajh6FESR46o8/foUeFLTdX9NrUjpEQJQvnyJCpXVk/ulSoRlS+vzsuKFQmVK5OoXt3bD1I5mTKFaORIIWbN8ud/HXDFPlVD+NFH1fYGr01dmXD8OCEtjej4cRIpKWqkf/w4QU3tERUtSuL0J5vixQk+H4moKHWhDLcftz+OHCF67z31NBT8Dg51E+rShejOO4kuv9zbT0xOS01VaysSEwkpKSROncr+706dUufwaUSBAkSnnZsoXJhEdLR6916oUETezP2Wlkb0yy9EH31ENGuWzuALKF1arYO57z41yIo0J0+qwUBGBgkpiRITszsn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"/>
                                        </defs>
                                    </svg>
                                </div>
                                <p  class="about_us_second_item_child_info">
{{--                                    На основе предоставленных данных улучшаете качество обслуживания клиентов.--}}
                                    {{$comandnayarabotas->text4}}
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
        @endforeach
@foreach($exaple_otchota as $exaple)
        <div class="report">
            <div class="report_wrapper">

                <div class="report_items_first_wrapper">
                    <div class="report_item_first_child">
                        <div class="report_item_first_child_title_line_box">
                            <h1 class="report_item_first_child_title">
{{--                                Пример тестового отчета--}}
                            {{$exaple->text1}}
                            </h1>
                            <div class="report_item_first_child_line"></div>
                        </div>
                        <div class="report_item_first_child_info_parent_wrapper">
                            <div class="report_item_first_child_info_child">
                                <p class="report_item_first_child_info_text">
{{--                                    1 янв. 2022 г. - 31 дек. 2022 г.--}}
                              {{$exaple->text2}}
                                </p>
                            </div>
                            <div class="report_item_first_child_info_child3">
                                <p class="report_item_first_child_info_text">
{{--                                    Мастер--}}
                               {{$exaple->text3}}
                                </p>
                            </div>
                        </div>
                        <div class="report_item_first_child_info_parent_wrapper2">
                            <div class="report_item_first_child_info_child2">
                                <p class="report_item_first_child_info_text2">
{{--                                    Количество заказ-нарядов--}}
                                    {{$exaple->text4}}
                                </p>
                                <p class="report_item_first_child_info_text5">
{{--                                    195--}}
                                    {{$exaple->text5}}
                                </p>
                            </div>
                            <div class="report_item_first_child_info_child2">
                                <p class="report_item_first_child_info_text2">
{{--                                    Количество успешных звонков--}}
                                    {{$exaple->text6}}
                                </p>
                                <p class="report_item_first_child_info_text5">
{{--                                    151--}}
                                    {{$exaple->text7}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="report_item_first_child2">
                        <div class="report_item_first_child_img">
{{--                            <img src="{{asset('academia/images/report_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$exaple->photo1)}}">
                        </div>
                        <div class="report_item_first_child_info_parent_wrapper3">
                            <p class="report_item_first_child_info_text3">
{{--                                NPS--}}
                                {{$exaple->text8}}
                            </p>
                            <p class="report_item_first_child_info_text4">
{{--                                85%--}}
                                {{$exaple->text9}}
                            </p>
                        </div>

                    </div>
                </div>
                <div class="report_items_second_wrapper">
                    <div class="report_item_second_child">
                        <div class="report_item_second_child_img">
{{--                            <img src="{{asset('academia/images/report_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$exaple->photo2)}}">
                        </div>
                        <div class="report_item_second_child_img">
{{--                            <img src="{{asset('academia/images/report_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$exaple->photo3)}}">
                        </div>
                    </div>
                    <div class="report_item_second_child">
                        <div class="report_item_second_child_img">
{{--                            <img src="{{asset('academia/images/report_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$exaple->photo4)}}">
                        </div>
                        <div class="report_item_second_child_img">
{{--                            <img src="{{asset('academia/images/report_img1.png')}}">--}}
                            <img src="{{asset('sistemaocenki/'.$exaple->photo5)}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
        <div class="customer_reviews" id="reviews">
            <div class="customer_reviews_wrapper">
                <div class="customer_reviews_title_line_wrapper">
               @foreach($other as $others)
                    <h1 class="customer_review_title">
{{--                        Отзывы клиентов--}}
                    {{$others->text1}}
                    </h1>
                    @endforeach
                    <div class="customer_review_line"></div>
                </div>

                <div class="customer_reviews_items_wrapper">

            @foreach($costumer_revius AS $otziv)
                    <div class="customer_reviews_item">
{{--                        <a href="https://youtu.be/7KwtXNoYQEY" class="review_link" target="_blank">--}}
{{--                            <img src="{{asset('academia/images/review_img1.png')}}">--}}
{{--                        </a>--}}
                        <iframe class="review_link" width="350" height="250" {{$otziv->video  }} title="YouTube video player"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                                                                                    gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        <div class="customer_review_item_info_wrapper">
                            <p class="customer_reviews_name">
{{--                                Богдан--}}
                            {{$otziv->name}}
                            </p>
                            <p class="customer_reviews_item_info">
{{--                                После NPS анализа на подьемники очереди из клиентов. Этот проект мне богом дан!--}}
                            {{$otziv->content}}
                            </p>
                        </div>
                    </div>
@endforeach
{{--                    <div class="customer_reviews_item">--}}

{{--                        <a href="https://youtu.be/7KwtXNoYQEY" class="review_link" target="_blank">--}}
{{--                            <img src="{{asset('academia/images/review_img2.png')}}">--}}

{{--                        </a>--}}


{{--                        <div class="customer_review_item_info_wrapper">--}}
{{--                            <p class="customer_reviews_name">Светлана</p>--}}
{{--                            <p class="customer_reviews_item_info">Очень классный проект. Большой респект команде  <span>Му Теам</span> </p>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="customer_reviews_item">--}}
{{--                        <a href="https://youtu.be/7KwtXNoYQEY" class="review_link" target="_blank">--}}
{{--                            <img src="{{asset('academia/images/review_img3.png')}}">--}}

{{--                        </a>--}}
{{--                        <div class="customer_review_item_info_wrapper">--}}
{{--                            <p class="customer_reviews_name">Александр</p>--}}
{{--                            <p class="customer_reviews_item_info">Благодаря <span>My Team</span>  узнал что мои слесаря ”левачат”. Теперь все идет гладко. Большое спасибо</p>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div>
            </div>
        </div>
 @foreach($other as $others)
        <div class="what_level_are_you">
            <div class="what_level_are_you_wrapper">
                <div class="what_level_are_you_facts_infos_wrapper">
                    <p class="what_level_are_you_facts_info1">
{{--                        Цель:80%--}}
                        {{$others->text2}}
                    </p>
                    <div class="what_level_are_you_facts_info2_img_box">
                        <div class="what_level_are_you_facts_info2_img">
                            <img src="{{asset('academia/images/level_img.png')}}">
                            <img src="{{asset('academia/images/level_img.png')}}">
                        </div>
                        <p class="what_level_are_you_facts_info2">
{{--                            Факт:84%--}}
                            {{$others->text3}}
                        </p>
                    </div>


                </div>
                <button class="what_level_are_you_btn">А на каком уровне вы?</button>
            </div>
        </div>
        @endforeach
        @foreach($other as $others)
        <div class="leave_a_request" id="leave_a_request">
            <div class="leave_a_request_wrapper">
                <div class="leave_a_request_title_line_wrapper">
                    <div class="leave_a_request_line"></div>
                    <h1 class="leave_a_request_title">
{{--                        Хотите  узнать ?оставьте заявку--}}
                        {{$others->text4}}
                    </h1>
                </div>

                @if(session('sucsses'))
                       <div style="display: flex;" class="succses2">
                           &ensp;&ensp;&ensp;&ensp;&ensp;         <p style="display: flex;
    align-items: center;
    color: white;" class="succsestext">
                            <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                               Вы удачно отправили заявку</p>
                    </div>
                @endif
                <form id="infoovas" action="{{route('xotiteuznaty')}}" method="post" class="leave_a_request_form_wrapper">
                    @csrf
                    <div class="leave_a_request_input_wrapper">
                        <input name="name" type="text" placeholder="Ваше Имя" class="leave_a_request_input_field" required>
                    </div>
                    <div class="leave_a_request_input_wrapper">
                        <input name="email" type="email" placeholder="Эл. Почта" class="leave_a_request_input_field" required>
                    </div>
                    <p class="leave_a_request_form_info">
                        *Мы не передаем данные третьим лицам!

                    </p>
                    <button class="leave_a_request_form_send_btn">Отправить</button>
                </form>
                <p class="leave_a_request_info">
{{--                    MY TEAM--}}
{{--                    НАДЕЖНАЯ ОПОРА ВАШЕГО БИЗНЕСА--}}
                    {{$others->text5}}
                </p>
            </div>
        </div>
            @endforeach
    </main>




       @if(auth()->user() != null)
    <div  @if(auth()->user()->verify == 1) style="display: none" @else style="display: block" @endif class="registercode change_password_popup_code">
       @else
            <div   class="registercode change_password_popup_code">
           @endif
        <div class="change_password_popup_wrapper">
            <div style="    display: none;" class="change_password_popup_close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                </svg>

            </div>
            <div class="change_password_popup_items">
                <div class="change_password_popup_img_item">
                    <img src="{{asset('academia/images/popup_img.png')}}">
                </div>
                <form action="" class="registercodeform change_password_popup_form">
                    @csrf
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="notcode"></div>
                            <input name="registercode" type="number" placeholder="Код подтверждения" class="change_password_form_input_field">
                            <br><br>
                            &zwnj; <a style="color: #5f38ba;" class="dublecode" href="{{route('doubleregistercode')}}">Получить код подтверждения ёще раз</a>
                            <p class="codsuccses" style="display: none;">Код подтверждения отправлен на вашу эл.почту</p>

                        </div>
                    </div>



                    <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                </form>
            </div>

        </div>
    </div>

            <div id="forgotpasswordcode" class="change_password_popup_code">
                <div class="change_password_popup_wrapper">
                    <div class="change_password_popup_close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                        </svg>

                    </div>
                    <div class="change_password_popup_items">
                        <div class="change_password_popup_img_item">
                            <img src="{{asset('academia/images/popup_img.png')}}">
                        </div>
                        <form action="" id="forgotpasswordcode_form" class="mypopapclass change_password_popup_form">
                            <div class="change_password_popup_logo_img">
                                <img src="{{asset('academia/images/popup_logo.png')}}">
                            </div>

                            <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                            <div class="change_password_form_input_main_wrapper">
                                <div class="change_password_form_input_wrapper">
                                    <div class="registererror" id="forgotcodenot"></div>
                                    <input name="forgotpasswordcode" type="number" placeholder="Код подтверждения" class="codesuccses2 change_password_form_input_field" required>
                                    <a style="    text-decoration: none;color: #6f62bd;" class="otpravityeshoraz" href="{{route('sendtwocodeforgotpassword')}}">Отправит ещё раз</a>
                               <p class="otpravlennavashupochtu" style="display: none; color: #6f62bd;">Код подтверждения отправлен на вашу эл.почту</p>
                                </div>

                            </div>



                            <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                        </form>
                    </div>

                </div>
            </div>
            <div id="forgotpasswordnewpassword" class="change_password_popup_code">
                <div class="change_password_popup_wrapper">
                    <div class="change_password_popup_close">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                        </svg>

                    </div>
                    <div class="change_password_popup_items">
                        <div class="change_password_popup_img_item">
                            <img src="{{asset('academia/images/popup_img.png')}}">
                        </div>
                        <form action="" id="forgotpasswordnewpassword_form" class="mypopapclass change_password_popup_form">
                            <div class="change_password_popup_logo_img">
                                <img src="{{asset('academia/images/popup_logo.png')}}">
                            </div>

                            <h1 class="change_password_popup_title">Введите новый пароль</h1>

                            <div class="change_password_form_input_main_wrapper">
                                <div class="change_password_form_input_wrapper">
                                    <div class="registererror" id="forgotnewpasswordnot"></div>
                                    <input name="forgotnewpassword" type="password" placeholder="Новый пароль" class="codesuccses2 change_password_form_input_field" required>
                                </div>
                                <div class="change_password_form_input_wrapper">
                                    <div class="registererror" id="forgotnewpasswordnot2"></div>
                                    <input name="forgotnewpassword_confirmation" type="password" placeholder="Подтверждение пароля" class="codesuccses2 change_password_form_input_field" required>
                                </div>


                            </div>



                            <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                        </form>
                    </div>

                </div>
            </div>

        <div id="mypopap" class="mypopap" style="">
      <div class="myteamlogo"><img style="    width: 140px;" src="{{asset('academia/images/succsesimg.png')}}" alt=""></div>
            <h4 class="myh2 succsesmessage">

           </h4>
            <img style="    width: 150px;
    height: 150px;" class="myimg" src="{{asset('academia/images/succsesgalochka.png')}}" alt="">

        </div>
  @endsection
</div>
