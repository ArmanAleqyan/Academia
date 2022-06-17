@extends('academia.layouts.default')
@section('title')
    GROUPAUTO
@endsection
@section('content')



    <div class="my_team_main_wrapper" id="personal_area_page">
        <header class="header">
            <div class="header_wrapper">
                <div class="header_logo_wrapper">
                    <a href="{{route('Userhome')}}" class="header_logo_link">
                        <img src="{{asset('academia/images/personal_area_logo.png')}}">
                    </a>
                </div>
                <nav class="header_nav_list">
                    <ul class="header_ul_list">
                        <li class="header_ul_li">
                            <a href="{{url('/#leave_a_request')}}" class="header_ul_link">Оставить заявку</a>
                        </li>
                        <li class="header_ul_li">
                            <a href="{{url('/#result')}}" class="header_ul_link">Эффективность</a>
                        </li>
                        <li class="header_ul_li">
                            <a href="{{url('/#rate_section')}}" class="header_ul_link">Стоимость</a>
                        </li>
                        <li class="header_ul_li">
                            <a href="{{url('/#reviews')}}" class="header_ul_link">Отзывы</a>
                        </li>
                    </ul>
                </nav>
                <div class="hamburger_menu_sign_in_buttons_wrapper">
                    <!--                <button class="sign_in_btn">Войти</button>-->
                    <a href="{{route('userlogout')}}" class="private_office_link">Выйти</a>
                    <div class="hamburger_menu">
                        <span class="hamburger_menu_line"></span>
                        <span class="hamburger_menu_line"></span>
                        <span class="hamburger_menu_line"></span>
                    </div>

                </div>

                <div class="mobile_version_popup">
                    <div class="mobile_version_popup_wrapper">
                        <div class="mobile_version_popup_close">
                            <svg width="22" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="#ffffff"/>
                            </svg>

                        </div>
                        <nav class="mobile_header_nav_list">
                            <ul class="header_ul_list">
                                <li class="header_ul_li">
                                    <a href="" class="header_ul_link">Оставить заявку</a>
                                </li>
                                <li class="header_ul_li">
                                    <a href="" class="header_ul_link">Эффективность</a>
                                </li>
                                <li class="header_ul_li">
                                    <a href="" class="header_ul_link">Стоимость</a>
                                </li>
                                <li class="header_ul_li">
                                    <a href="" class="header_ul_link">Отзывы</a>
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
                                    <input type="text" placeholder="Эл. Почта" class="sign_in_form_input_field">
                                </div>
                                <div class="sign_in_form_input_wrapper">
                                    <input type="password" placeholder="Пароль" class="sign_in_form_input_field">
                                </div>
                            </div>



                            <button class="sign_in_popup_btn" type="button">Войти</button>
                            <button class="sign_up_popup_btn" type="button">Регистрация</button>
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
                        <div class="sign_in_popup_img_item">
                            <img src="{{asset('academia/images/popup_img.png')}}">
                        </div>
                        <form action="" class="sign_up_popup_form">
                            <div class="sign_up_popup_logo_img">
                                <img src="{{asset('academia/images/popup_logo.png')}}">
                            </div>

                            <h1 class="sign_up_popup_title">Регистрация</h1>

                            <div class="sign_up_form_input_main_wrapper">
                                <div class="sign_up_form_input_wrapper">
                                    <input type="text" placeholder="Имя" class="sign_up_form_input_field">
                                </div>
                                <div class="sign_up_form_input_wrapper">
                                    <input type="text" placeholder="Эл. Почта" class="sign_up_form_input_field">
                                </div>
                                <div class="sign_up_form_input_wrapper">
                                    <input type="password" placeholder="Пароль" class="sign_up_form_input_field">
                                </div>
                                <div class="sign_up_form_input_wrapper">
                                    <input type="password" placeholder="Повторите Пароль" class="sign_up_form_input_field">
                                </div>
                            </div>




                            <button class="sign_up_popup_btn2">Регистрация</button>
                        </form>
                    </div>

                </div>
            </div>
        </header>

        <main>
            <div class="personal_area">
                <div class="personal_area_wrapper">
                    @if(!auth()->user()->Tariff->isEmpty())
                    <div class="personal_area_header">

                           @foreach($product_name as $product_names)
                               @foreach($ready_report as $ready_reports)
                        <p class="personal_area_header_info">Ваш Тариф “{{$product_names->name}}” </p>
                        <p class="personal_area_header_info">Готово <span>{{$ready_reports->ready_report}}</span> отчета из <span>{{$product_names->estimates}}</span> </p>
                        <p class="personal_area_header_info">Осталось <span> {{$origin_day}}

                            </span>  дней</p>
{{--                        <p class="personal_area_header_info">Загрузить контакты  (<span>  {{$product_names->estimates - $ready_reports->ready_report }}</span>  Конт.)</p>--}}
                    </div>
                    @endforeach
                        @endforeach
                @endif
                    <div class="personal_area_items_wrapper">
                        <div class="personal_area_item1">
                            <div class="personal_area_item_links_wrapper">


                                @if(!auth()->user()->Tariff->isEMpty())
                                    @if(auth()->user()->Tariff[0]->treaty != null)
                                        <a href="{{asset('ExeleFile/'.auth()->user()->name.'ExeleFile/'.auth()->user()->Tariff[0]->treaty)}}" class="personal_area_item_link download_contract_link" download>Скачать договор</a>

                                    @endif
                                <a href="{{asset('ExeleFile/'.auth()->user()->name .'ExeleFile/'.auth()->user()->Tariff[0]->file)}}" ID="ready_reports_upload_link" class="personal_area_item_link  ready_reports_upload_link">Готовые отчёты(Выгрузить)</a>
                                @endif
                                <a href="{{route('UserHistoryTariff')}}" class="personal_area_item_link history_link">История</a>
                                <button class="change_password_btn">Изменить пароль</button>
                                <button class="change_email_btn">Изменить эл. почту</button>
                            </div>


{{--                            <div class="technical_assistance_link_log_out_from_personal_account_wrapper">--}}
{{--                                <a  class="submit_request technical_assistance_link">Тех.Поддержка</a>--}}
{{--                                <button class="log_out_from_personal_account">--}}
{{--                               <span class="log_out_from_personal_account_icon">--}}
{{--                                   <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path d="M8 1L1 8M1 8L8 15M1 8H9H17" stroke="url(#paint0_linear_72_88)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        <defs>--}}
{{--                                        <linearGradient id="paint0_linear_72_88" x1="9.42105" y1="-7.75" x2="9.62839" y2="23.3111" gradientUnits="userSpaceOnUse">--}}
{{--                                        <stop stop-color="#8C0EBA"/>--}}
{{--                                        <stop offset="1" stop-color="#4153B9"/>--}}
{{--                                        </linearGradient>--}}
{{--                                        </defs>--}}
{{--                                   </svg>--}}
{{--                               </span>--}}
{{--                                    <a style="color: #333333;  text-decoration: none !important;" href="{{route('userlogout')}}">Выход из личнего кабинета</a>--}}
{{--                                </button>--}}
{{--                            </div>--}}

                        </div>
                        <div class="personal_area_item2">
                            <h1 class="personal_area_item_title">
                                Выберите подходящий для вас тариф,чтобы
                                начать повышать лояльность клиентов
                            </h1>
                            <div class="rate_items_wrapper2">
{{--                                <div class="rate_item2 rate_item2_first">--}}
{{--                                    <h2 class="rate_item_title2">Минимальный</h2>--}}
{{--                                    <p class="rate_item_price_info2">9.900 Рублей</p>--}}
{{--                                    <div class="rate_item_info_details_wrapper2">--}}
{{--                                        <ul class="rate_item_info_details_ul_list2">--}}
{{--                                            <li class="rate_item_info_detail2">99 Рублей за оценку</li>--}}
{{--                                            <li class="rate_item_info_detail2">100 Оценок</li>--}}
{{--                                            <li class="rate_item_info_detail2">Срок действия тарифа--}}
{{--                                                30 дней</li>--}}
{{--                                        </ul>--}}

{{--                                    </div>--}}
{{--                                    <button style="border-radius: 5px"  class="rate_item_add_contacts_btn">Добавит контакты</button>--}}
{{--                                    <p class="rate_item_info3">--}}
{{--                                        Осталось <span>22</span>  оценки--}}
{{--                                        и <span>15</span>  дней--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                            @foreach($tarifs as $tarif)
                                <div class="rate_item2">
                                    <h2 class="rate_item_title2">{{$tarif->name}}</h2>
                                    <p class="rate_item_price_info2"><span class="tarifdefaultprice">{{$tarif->price}}</span> Рублей</p>
                                    <div class="rate_item_info_details_wrapper2">
                                        @if(!auth()->user()->Tariff->isEmpty())
                                        <ul class="rate_item_info_details_ul_list2" @if(auth()->user()->Tariff[0]->tariff_id == $tarif->id ) style="margin-bottom: 1px !important;" @else style="margin-bottom: 106px;" @endif>

                                            @else
                                                <ul class="rate_item_info_details_ul_list2" style="margin-bottom: 106px;">

                                           @endif
                                            <ul class="rate_item_info_details_ul_list2" >
                                            <li class="rate_item_info_detail2">{{$tarif->oneprice}} Рублей за оценку</li>
                                            <li class="rate_item_info_detail2">{{$tarif->estimates}} Оценок</li>
                                            <li class="rate_item_info_detail2">Срок действия тарифа
                                                {{$tarif->term}} дней</li>
                                        </ul>
                                    </div>

                                    <input class="productid" type="hidden" value="{{$tarif->id}}">

                                    @if(auth()->user()->Tariff->isEmpty())
                                       @if(auth()->user()->verify != 1 )

                                            @else
                                            <button  class="rate_item_link2 buy_btn">Купить</button>
                                           @endif
                                        @else

                            @if(auth()->user()->Tariff[0]->tariff_id == $tarif->id )
                                            @foreach($product_name as $product_names)
                                                @foreach($ready_report as $ready_reports)
{{--                                            <button style="border-radius: 5px"  class="rate_item_add_contacts_btn">Добавит контакты</button>--}}
                                                    @if(session('succses'))
                                                        <div class="succses2">
                                                            <p style="    display: flex;
    align-items: center;" class="succsestext">
                                                                <img class="succsesimg" src="{{asset('uploads/Galochka.png')}}"/>
                                                                Файл отправлен</p>
                                                        </div>
                                                    @endif
                                                    <form id="sendexelefile_form" action="{{route('sendexelefile')}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <span class="rate_item_info_detail2" style="display: flex; justify-content: center; font-size: 26px; padding-bottom: 8px;" id="MyFuleSpan"></span>
                                                    <input class="sendexelefile" name="sendexelefile" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="exelefiel" type="file" style="display: none;" >

                                                        @if(auth()->user()->Tariff[0]->filestatus == null)

                                                    <label style="border-radius: 5px" class="rate_item_add_contacts_btn" for="exelefiel">Добавить контакты</label>
                                                        @endif

                                                    <button type="submit" style="display: none; border-radius: 5px" class="myAddContact rate_item_add_contacts_btn" for="exelefiel">Загрузить</button>

{{--                                                                                <p class="rate_item_info3">--}}
{{--                                                                                    Осталось <span> {{$product_names->estimates - $ready_reports->ready_report }}</span>  оценки--}}
{{--                                                                                    и <span>{{$origin_day}}</span>  дней--}}
{{--                                                                                </p>--}}



                                                        <button class="asd" style="display: none;" type="submit"></button>
                                                    </form>
                                                @endforeach
                                            @endforeach
                                                @if(auth()->user()->Tariff[0]->status == 1)
                                                 <p style="border-radius: 8px; padding: 0px 12px !important;     font-size: 15px !important;    margin-top: 32px !important;" class="rate_item_add_contacts_btn">Подождите. Администратор скоро  одобрить вашу заявку.</p>
                                                @endif
                                @if(auth()->user()->Tariff[0]->status == 2)
                                                    <p style="border-radius: 8px; padding: 5px 12px !important;     font-size: 15px !important;    margin-top: 32px !important;" class="rate_item_add_contacts_btn">Текущий тариф</p>
                                    @endif
                                @endif


                                        @endif
                                </div>
@endforeach
{{--                                <div class="rate_item2">--}}
{{--                                    <h2 class="rate_item_title2">Стандарт</h2>--}}
{{--                                    <p class="rate_item_price_info2">23.700 Рублей</p>--}}
{{--                                    <div class="rate_item_info_details_wrapper2">--}}
{{--                                        <ul class="rate_item_info_details_ul_list2">--}}
{{--                                            <li class="rate_item_info_detail2">79 Рублей за оценку</li>--}}
{{--                                            <li class="rate_item_info_detail2">300 Оценок</li>--}}
{{--                                            <li class="rate_item_info_detail2">Срок действия тарифа--}}
{{--                                                60 дней</li>--}}
{{--                                        </ul>--}}

{{--                                    </div>--}}
{{--                                    <button  class="rate_item_link2 buy_btn">Купить</button>--}}
{{--                                </div>--}}
{{--                                <div class="rate_item2">--}}
{{--                                    <h2 class="rate_item_title2">VIP</h2>--}}
{{--                                    <p class="rate_item_price_info2">от 34.500 Рублей</p>--}}
{{--                                    <div class="rate_item_info_details_wrapper2">--}}
{{--                                        <ul class="rate_item_info_details_ul_list2">--}}
{{--                                            <li class="rate_item_info_detail2">69 Рублей за оценку</li>--}}
{{--                                            <li class="rate_item_info_detail2">500 Оценок</li>--}}
{{--                                            <li class="rate_item_info_detail2">Срок действия тарифа--}}
{{--                                                90 дней</li>--}}
{{--                                        </ul>--}}

{{--                                    </div>--}}
{{--                                    <a href="" class="rate_item_link2">Связаться</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="confirm_purchase_popup">
                    <div class="confirm_purchase_popup_wrapper">
                        <div class="confirm_purchase_popup_close_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"/>
                            </svg>
                        </div>
                        <div  class="confirm_purchase_popup_img">
                            <img src="{{asset('academia/images/confirm_popup_img.png')}}">
                        </div>
                        <h1  class="confirm_purchase_popup_title">Подтвердите покупку</h1>
                        <p class="confirm_purchase_popup_title2">Тариф
                            (<span class="tariffname"></span>)
                            <br> <span class="tarifprice"></span> Руб</p>
                        <div class="confirm_purchase_popup_btns">
                            <form id="product_rock_form" >
                                <input class="succsesproductid" name="succsesproductid" type="hidden" value="">
                            <button type="submit" class="confirm_purchase_popup_confirm_btn">Подтвердить</button>
                            </form>
                            <button class="confirm_purchase_popup_cancel_btn">Отменить</button>
                        </div>
                    </div>
                </div>


                <div class="change_password_popup">
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
                            <form action=""  id="updatepasswordcode" class="change_password_popup_form">
                                <div class="change_password_popup_logo_img">
                                    <img src="{{asset('academia/images/popup_logo.png')}}">
                                </div>

                                <h1 class="change_password_popup_title">Введите эл. почту</h1>

                                <div class="change_password_form_input_main_wrapper">
                                    <div class="change_password_form_input_wrapper">
                                        <div class="registererror" id="notemail"></div>
                                        <input name="email" type="email" placeholder="Эл. Почта" class="email_change change_password_form_input_field" required>

                                    </div>

                                </div>



                                <button class="change_password_popup_btn" type="submit">Подтвердить</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="change_password_popup_code">
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
                        <form action="" id="resetpasswordcode" class="mypopapclass change_password_popup_form">
                               <div class="change_password_popup_logo_img">
                                <img src="{{asset('academia/images/popup_logo.png')}}">
                            </div>

                            <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                            <div class="change_password_form_input_main_wrapper">
                                <div class="change_password_form_input_wrapper">
                                    <div class="registererror" id="notcode"></div>
                                    <input name="resetpasswordcode" type="number" placeholder="Код подтверждения" class="codesuccses2 change_password_form_input_field" required>

                                </div>

                            </div>



                            <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                        </form>
                    </div>

                </div>
            </div>
    </div>

    <div  class="change_password_popup_new">
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
                <form action="" id="updatepassword" class="change_password_popup_form">
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите новый пароль</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="errorupdatepassword"></div>
                            <input name="updatepassword" type="password" placeholder="Пароль" class="change_password_form_input_field" required>

                        </div>
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="errorupdatepassword_confirmation"></div>
                            <input  name="updatepassword_confirmation" type="password" placeholder="Повтор пароля" class="change_password_form_input_field" required>

                        </div>

                    </div>



                    <button class="change_password_popup_btn" type="submit">Подтвердить</button>

                </form>
            </div>

        </div>
    </div>
    </div>









    <div class="change_email_popup">
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
                <form action="" id="updateemailold" class="updatepasswordcode change_password_popup_form change_email_input_popup_form">
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите адрес старой эл.почты</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="notemailold"></div>
                            <input id="oldemail" name="oldemail" type="text" placeholder="Эл. Почта" class="change_password_form_input_field    change_email_input" required>

                        </div>

                    </div>



                    <button class=" change_email_btn_popup change_email_btn1" type="submit">Подтвердить</button>

                </form>
            </div>

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
                <form action="" class="change_password_popup_form  change_email_input_popup_form">
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <input type="number" placeholder="Код подтверждения" class="change_password_form_input_field  change_email_input">
                        </div>

                    </div>



                    <button class=" change_email_btn_popup change_email_btn2" type="button">Подтвердить</button>

                </form>
            </div>

        </div>
    </div>
    </div>

    <div class="change_email_popup_new">
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
                <form action="" id="newemailform" class="change_password_popup_form   change_email_input_popup_form">
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите адрес новой эл.почты</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="emailexist"></div>
                            <input name="newemail" type="email" placeholder="Эл. Почта" class="change_password_form_input_field   change_email_input" required>
                        </div>

                    </div>




                    <button class=" change_email_btn_popup change_email_btn3" type="submit">Подтвердить</button>

                </form>
            </div>

        </div>
    </div>
    </div>
    </main>

    </div>
    <div id="mypopapclassq" class="change_password_popup_code">
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
                <form action="" id="mypopapclass" class="change_password_popup_form">
                    <div class="change_password_popup_logo_img">
                        <img src="{{asset('academia/images/popup_logo.png')}}">
                    </div>

                    <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                    <div class="change_password_form_input_main_wrapper">
                        <div class="change_password_form_input_wrapper">
                            <div class="registererror" id="notecodeemail"></div>
                            <div class="registererror" id="notcode"></div>
                            <input  name="resetpasswordcodeasd" type="number" placeholder="Код подтверждения" class="codesuccses2 change_password_form_input_field" required>

                        </div>

                    </div>



                    <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                </form>
            </div>

        </div>
    </div>
        <div id="mypopapclassq" class="change_password_popup_code change_password_popup_code2">
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
                    <form action="" id="mypopapclass222" class="change_password_popup_form ">
                        <div class="change_password_popup_logo_img">
                            <img src="{{asset('academia/images/popup_logo.png')}}">
                        </div>

                        <h1 class="change_password_popup_title">Введите код подтверждения</h1>

                        <div class="change_password_form_input_main_wrapper">
                            <div class="change_password_form_input_wrapper">
                                <div class="registererror" id="notecodeemail"></div>
                                <div class="registererror" id="notcodesss"></div>
                                <input  name="resetpasswordcodeasdssss" type="number" placeholder="Код подтверждения" class="codesuccses2 change_password_form_input_field" required>

                            </div>

                        </div>



                        <button class="change_password_popup_btn code_btn" type="submit">Подтвердить</button>

                    </form>
                </div>

            </div>
        </div>





    <div class="submit_request_popup">
        <div class="submit_request_popup_wrapper">
            <div class="submit_request_popup_close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.682313 1.56756C0.624203 1.50945 0.578108 1.44046 0.546659 1.36454C0.51521 1.28861 0.499023 1.20724 0.499023 1.12506C0.499023 1.04288 0.51521 0.961502 0.546659 0.885578C0.578108 0.809654 0.624203 0.740667 0.682313 0.682557C0.740423 0.624447 0.809409 0.578352 0.885334 0.546903C0.961258 0.515454 1.04263 0.499268 1.12481 0.499268C1.20699 0.499268 1.28837 0.515454 1.36429 0.546903C1.44022 0.578352 1.5092 0.624447 1.56731 0.682557L7.99981 7.11631L14.4323 0.682557C14.4904 0.624447 14.5594 0.578352 14.6353 0.546903C14.7113 0.515454 14.7926 0.499268 14.8748 0.499268C14.957 0.499268 15.0384 0.515454 15.1143 0.546903C15.1902 0.578352 15.2592 0.624447 15.3173 0.682557C15.3754 0.740667 15.4215 0.809654 15.453 0.885578C15.4844 0.961502 15.5006 1.04288 15.5006 1.12506C15.5006 1.20724 15.4844 1.28861 15.453 1.36454C15.4215 1.44046 15.3754 1.50945 15.3173 1.56756L8.88356 8.00006L15.3173 14.4326C15.3754 14.4907 15.4215 14.5597 15.453 14.6356C15.4844 14.7115 15.5006 14.7929 15.5006 14.8751C15.5006 14.9572 15.4844 15.0386 15.453 15.1145C15.4215 15.1905 15.3754 15.2594 15.3173 15.3176C15.2592 15.3757 15.1902 15.4218 15.1143 15.4532C15.0384 15.4847 14.957 15.5008 14.8748 15.5008C14.7926 15.5008 14.7113 15.4847 14.6353 15.4532C14.5594 15.4218 14.4904 15.3757 14.4323 15.3176L7.99981 8.88381L1.56731 15.3176C1.5092 15.3757 1.44022 15.4218 1.36429 15.4532C1.28837 15.4847 1.20699 15.5008 1.12481 15.5008C1.04263 15.5008 0.961258 15.4847 0.885334 15.4532C0.809409 15.4218 0.740423 15.3757 0.682313 15.3176C0.624203 15.2594 0.578108 15.1905 0.546659 15.1145C0.51521 15.0386 0.499023 14.9572 0.499023 14.8751C0.499023 14.7929 0.51521 14.7115 0.546659 14.6356C0.578108 14.5597 0.624203 14.4907 0.682313 14.4326L7.11606 8.00006L0.682313 1.56756Z" fill="black"></path>
                </svg>

            </div>
            <div class="submit_request_popup_items">
                <div class="submit_request_popup_img_item">
                    <img src="http://127.0.0.1:8000/academia/images/popup_img.png">
                </div>
                <form action="" id="obratnizvanok" class="submit_request_popup_form">
                    <div class="submit_request_popup_logo_img">
                        <img src="http://127.0.0.1:8000/academia/images/popup_logo.png">
                    </div>

                    <h1 class="submit_request_popup_title">Оставить заявку</h1>
                    <p class="submit_request_popup_info">*Мы не передаем данные третьим лицам!</p>

                    <div class="submit_request_form_input_wrapper">
                        <input name="emailname" type="text" placeholder="ФИО" class="submit_request_form_input_field" required="">
                    </div>
                    <div class="submit_request_form_input_wrapper">
                        <input name="emailphone" type="number" placeholder="Номер телефона" class="submit_request_form_input_field" required="">
                    </div>
                    <div class="submit_request_form_input_wrapper">
                        <input name="emailcity" type="text" placeholder="Город" class="submit_request_form_input_field" required="">
                    </div>
                    <div class="submit_request_form_input_wrapper">
                        <textarea name="message" type="text" placeholder="Сообщение"
                                  class="submit_request_form_input_field" required> Сообщение</textarea>
                    </div>
                    <div style="display: none;" class="registererror" id="emailcheckerror">Обязательное поле</div>
                    <div class="submit_request_form_check_input_wrapper">
                        <input type="checkbox" name="emailcheckbox" id="submit_request_form_check_input_field" hidden="">
                        <label for="submit_request_form_check_input_field" class="submit_request_form_check_input_label">
                        </label>
                        <p class="submit_request_form_check_input_label_text">Я согласен
                            <span>с правилаим работы сервиса</span>
                        </p>
                    </div>

                    <button class="submit_request_form_order_call">Заказать звонок</button>
                </form>
            </div>

        </div>
    </div>

    <div id="mypopap" class="mypopap" >
        <div class="myteamlogo"><img style="width: 140px;" src="{{asset('academia/images/succsesimg.png')}}" alt=""></div>
        <h4 class="myh2 succsesmessage">

        </h4>
        <img style="    width: 150px;
    height: 150px;" class="myimg" src="{{asset('academia/images/succsesgalochka.png')}}" alt="">

    </div>


@endsection
