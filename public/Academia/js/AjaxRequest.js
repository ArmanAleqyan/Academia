$(document).ready(function () {
    $(".sign_up_popup_form").submit(function (event) {
        $('.sign_up_popup_btn2').css('type', 'button');
        $('#nameerror').text(" ");
        $('#checkboxerror').text(" ");
        $('#emailerror').text(" ");
        $('.passworderror').text(" ");
        $('#phoneerror').text(" ");
        var formData = {
            name:  $('input[name=registername]').val(),
            jobtitle:  $('input[name=registerjobtitle]').val(),
            phone:  $('input[name=registerphone]').val(),
            email:  $('input[name=registeremail]').val(),
            city:  $('input[name=registercity]').val(),
            checkbox : $('input[name=registercheckbox]:checked').val(),
            password : $('input[name=registerpassword]').val(),
            password_confirmation : $('input[name=registerpassword_confirmation]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/register",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
             if(response.hasOwnProperty('succses')){
                 $('.sign_up_popup_btn2').css('type', 'submit');
                 // window.location.reload(true);
                 $('.sign_up_popup.open').css('display', 'none');
                 $('.registercode').css('display', 'block');
               $('.change_password_popup_close').css('display', 'none');
             }
            },
            error: function (error) {
                $('.sign_up_popup_btn2').css('type', 'submit');
                $('.sign_up_popup_btn2').css('display', 'block');
                $('.sign_up_form_input_wrapper').css('margin-bottom','10px');
                $('#nameerror').text(error.responseJSON.errors.name);
                // $('#jobtitle').text(error.responseJSON.errors.jobtitle);
                $('#checkboxerror').text(error.responseJSON.errors.checkbox);
                $('#emailerror').text(error.responseJSON.errors.email);
                $('.passworderror').text(error.responseJSON.errors.password);
                $('#phoneerror').text(error.responseJSON.errors.phone);
            }
        });
        event.preventDefault();
    });
});


$(document).ready(function () {
    $(".sign_in_popup_form").submit(function (event) {
        var formData = {
            email:  $('input[name=email]').val(),
            password : $('input[name=password]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/userlogin",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    window.location.reload(true);
                }
            },
            error: function (error) {
                $('.sign_in_form_input_field').css('border','1px solid red');
                $('#notuser').text(error.responseJSON.message);
                $('#email2error').text(error.responseJSON.errors.email);
                $('#password2error').text(error.responseJSON.errors.password);
            }




        });
        event.preventDefault();
    });
});



$(document).ready(function () {
    $(".registercodeform").submit(function (event) {

        var formData = {
            registercode:  $('input[name=registercode]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/registercode",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $('.succsesmessage').text(response.message);

                    $('.mypopap').css('display','block');
                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);
                    setTimeout(function(){
                        window.location.reload(true);
                    }, 3000);

                }
            },
            error: function (error) {
                $('.change_password_form_input_field').css('border','1px solid red');
                $('#notcode').text(error.responseJSON.message);
            }
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $(".dublecode").click(function (event) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "get",
            url: "/doubleregistercode",
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                  //  window.location.reload(true);
                    $('.dublecode').css('display','none');
                    $('.codsuccses').css('display','block');

                }
            },
        });
        event.preventDefault();
    });
});


$(document).ready(function () {
    $("#updatepasswordcode").submit(function (event) {
        $('.change_password_popup_btn').css('type','button');
        var formData = {
            email:  $('input[name=email]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/updatepasswordcode",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $('.change_password_popup_btn').css('display','block');
                          $(".change_password_popup_code2").addClass("open");
                         $("body").addClass("hidden_body");
                         $(".change_password_popup").removeClass("open");
                }
            },
            error: function (error) {
                $('.change_password_popup_btn').css('type','submit');
                $('.email_change').css('border','1px solid red');
                $('#notemail').text(error.responseJSON.message);
            }
        });
        event.preventDefault();
    });
});



$(document).ready(function () {
    $("#mypopapclass222").submit(function (event) {
        var formData = {
            resetpasswordcodeasdssss:  $('input[name=resetpasswordcodeasdssss]').val(),
        };


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/resetpasswordcode",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $(".change_password_popup_new").addClass("open");
                        $("body").addClass("hidden_body");
                      $(".change_password_popup_code").removeClass("open");
                      $(".change_password_popup").removeClass("open");
                }
            },
            error: function (error) {
                $('.codesuccses2').css('border','1px solid red');
                $('#notcodesss').text(error.responseJSON.message);
            }
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $("#updatepassword").submit(function (event) {

        var formData = {
            updatepassword:  $('input[name=updatepassword]').val(),
            updatepassword_confirmation: $('input[name=updatepassword_confirmation]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/updatepassword",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    // $(".change_password_popup_code").addClass("open");
                    // $("body").addClass("hidden_body");
                    // $(".change_password_popup").removeClass("open");
                    $('.mypopap').css('display','block');
                   $('#updatepassword').css('display','none');
                    $('.succsesmessage').text(response.message);
                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);
                    setTimeout(function(){
                        window.location.reload(true);
                    }, 3000);

                }
            },
            error: function (error) {
                console.log(error.responseJSON.errors);

                $('.change_password_form_input_field').css('border','1px solid red');
                $('#notemail').text(error.responseJSON.message);
                $('#errorupdatepassword').text(error.responseJSON.errors.updatepassword[0]);
                $('#errorupdatepassword_confirmation').text(error.responseJSON.errors.updatepassword[1]);
            }
        });
        event.preventDefault();
    });
});




$(document).ready(function () {
    $("#updateemailold").submit(function (event) {

        var formData = {
            email: $('input[name=oldemail]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/updateemailold",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
     // $(".change_email_popup_code").addClass("open");
     $("body").addClass("hidden_body");
      $(".change_email_popup").removeClass("open");
         $(".change_email_popup_new").addClass("open");
                }
            },
            error: function (error) {
                console.log(error.responseJSON.errors);
                $('#oldemail').css('border','1px solid red');
                $('#notemailold').text(error.responseJSON.message);
                $('#errorupdatepassword').text(error.responseJSON.errors.updatepassword[0]);
                $('#errorupdatepassword_confirmation').text(error.responseJSON.errors.updatepassword[1]);
            }
        });
        event.preventDefault();
    });
});



$(document).ready(function () {
    $("#newemailform").submit(function (event) {
        var formData = {
            newemail: $('input[name=newemail]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/newemailsendcode",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    // $(".change_email_popup_code").addClass("open");
                    $("body").addClass("hidden_body");
                    $("#mypopapclassq").css('display', 'block');
                    $(".change_email_popup_new").removeClass("open");
                }
            },
            error: function (error) {
                $('.change_email_input').css('border','1px solid red');
                $('#emailexist').text(error.responseJSON.message);
                $('#errorupdatepassword').text(error.responseJSON.errors.updatepassword[0]);
                $('#errorupdatepassword_confirmation').text(error.responseJSON.errors.updatepassword[1]);
            }
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $("#mypopapclass").submit(function (event) {

        var formData = {
            resetpasswordcode: $('input[name = resetpasswordcodeasd]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/newemailveryfi",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $('.mypopap').css('display','block');
                    $('.succsesmessage').text(response.message);
                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);
                    setTimeout(function(){
                        window.location.reload(true);
                    }, 3000);
                    //     window.location.reload(true);
                }
            },
            error: function (error) {

                $('.codesuccses2').css('border','1px solid red');
                $('#notecodeemail').text(error.responseJSON.message);
            }
        });
        event.preventDefault();
    });
});


$(document).ready(function () {
    $(".zabilparol").click(function (event) {
        $(".sign_in_popup").removeClass("open");
        $('.change_email_popup_code').addClass('open');
        event.preventDefault();
    });
});

$(document).ready(function () {
    $("#sendcodeemail").submit(function (event) {

        var formData = {
            forgotemail: $('input[name = forgotemail]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/forgoutpassword",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $('.change_email_popup_code').removeClass('open');
                    $('#forgotpasswordcode').addClass('open');
                }
            },
            error: function (error) {
                $('.change_password_form_input_field').css('border','1px solid red');
                $('#forgotemailnote').text(error.responseJSON.message);
            }
        });
        event.preventDefault();
    });
});



$(document).ready(function () {
    $("#forgotpasswordcode_form").submit(function (event) {

        var formData = {
            code: $('input[name = forgotpasswordcode]').val(),

        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/forgotpasswordcode",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    $('.change_email_popup_code').removeClass('open');
                    $('#forgotpasswordcode').removeClass('open');
                    $('#forgotpasswordnewpassword').addClass('open');
                }
            },
            error: function (error) {
                $('#forgotcodenot').text(error.responseJSON.message);
                $('.codesuccses2').css('border','1px solid red');
            }
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $("#forgotpasswordnewpassword_form").submit(function (event) {

        var formData = {
            forgotnewpassword: $('input[name = forgotnewpassword]').val(),
            forgotnewpassword_confirmation: $('input[name = forgotnewpassword_confirmation]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/forgotpasswordnewpassword_form",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    // console.log(response.message)

                    $('#forgotpasswordnewpassword').removeClass('open');
                    $('.sign_in_popup ').addClass('open');
                  $('.mypopap').css('display','block');

                    $('.succsesmessage').text(response.message);
                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);
                }
            },
            error: function (error) {
                $('#forgotnewpasswordnot').text(error.responseJSON.errors.forgotnewpassword[0]);
                $('#forgotnewpasswordnot2').text(error.responseJSON.errors.forgotnewpassword[0]);
                $('.codesuccses2').css('border','1px solid red');
            }
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $(".otpravityeshoraz").click(function (event) {
        $('.otpravityeshoraz').css('display','none');
        $('.otpravlennavashupochtu').css('display','block');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/sendtwocodeforgotpassword",
            dataType: "json",
            encode: true,
        });
        event.preventDefault();
    });
});

$(document).ready(function () {
    $("#obratnizvanok").submit(function (event) {

        if($('input[name=emailcheckbox]:checked').val() != 'on'){
            $('#emailcheckerror').css('display' , 'block');
        }

        var formData = {
            name: $('input[name = emailname]').val(),
            phone: $('input[name = emailphone]').val(),
            city: $('input[name = emailcity]').val(),
            message: $('textarea[name = message]').val(),
            checkbox : $('input[name=emailcheckbox]:checked').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/submityourapplication",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    // console.log(response.message)
                    $('.mypopap').css('display','block');
                    $('.succsesmessage').text(response.message);

                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);

                    setTimeout(function(){

                        window.location.reload(true);
                    }, 3000);
                }
            },

            // error: function (error) {
            //         console.log(error);
            //
            // }
        });

        event.preventDefault();
    });
});


$(document).on('click', '.buy_btn', function () {
    var tarifname = $(this).parent().find('.rate_item_title2').text();
    var tarifprice = $(this).parent().find('.tarifdefaultprice').text();
    var productid = $(this).parent().find('.productid').val();
    $('.tariffname').text(tarifname);
    $('.tarifprice').text(tarifprice);
    $('.succsesproductid').val(productid);
});


$(document).ready(function () {
    $("#product_rock_form").submit(function (event) {
        var formData = {
            product_id: $('input[name = succsesproductid]').val(),
        };
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "POST",
            url: "/createorder",
            data: formData,
            dataType: "json",
            encode: true,

            success:function (response) {
                if(response.hasOwnProperty('succses')){
                    // console.log(response.message)
                    $('.mypopap').css('display','block');
                    $('.succsesmessage').text(response.message);

                    setTimeout(function(){
                        document.getElementById('mypopap').style.display = 'none';
                    }, 3000);

                    setTimeout(function(){

                        window.location.reload(true);
                    }, 3000);
                }
            },
        });

        event.preventDefault();
    });
});

$(document).ready(function () {
    $(".sendexelefile").change(function (event) {

        var path = jQuery(this).val();
        var filename = path.replace(/C:\\fakepath\\/, '');
                $('.rate_item_add_contacts_btn').css('display','none');
                $('.myAddContact').css('display','block');
        $('#MyFuleSpan').text(filename);
        event.preventDefault();
    });
});



// $(document).on('change','.audiofile',function(){
//     var thisval = $(this).val();
//     $(".oldaudioname").css("display", "none");
//     $('#uploadfile').text(thisval);
// });

$(document).ready(function () {
    $("#sendexelefile_form").submit(function (event) {

        $('.myAddContact').css('type','button');

    });
});