
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


$(document).ready(function () {
    $(".senddogovor").change(function (event) {

        var path = jQuery(this).val();
        var filename = path.replace(/C:\\fakepath\\/, '');
        $('.rate_item_add_contacts_btn').css('display','none');
        $('.myAddContact').css('display','block');
        $('#MyDogovorspan').text(filename);
        event.preventDefault();
    });
});


$(document).on('change','.audiofile',function(){
    var thisval = $(this).val();
    $(".oldaudioname").css("display", "none");
    $('#uploadfile').text(thisval);
});



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blaha').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}




$("#file-logo").on("change", function () {


    readURL(this);


});
///////////////////////////////////////////////////////////
function blahaURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#file-upload").on("change", function () {

    blahaURL(this);

});
//////////////////////////////////////////
function photo1Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo2').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo22").on("change", function () {

    photo1Url(this);

});

/////////////////////////////////////////////////////////////////////

function photo3Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo3 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo33").on("change", function () {

    photo3Url(this);

});

////////////////////////////////////////////////////////////////////

function photo4Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo4 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo44").on("change", function () {

    photo4Url(this);


});

//////////////////////////////////////////////////////////////////



function photo5Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo5 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo55").on("change", function () {

    photo5Url(this);



});

///////////////////////////////////////////////////////////////////////

function photo6Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo6 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo66").on("change", function () {

    photo6Url(this);



});

////////////////////////////////////////////////////////////////////

function photo7Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo7 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo77").on("change", function () {



    photo7Url(this);



});


/////////////////////////////////////////////////////////////////////


function photo8Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo8 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo88").on("change", function () {

    photo8Url(this);



});


/////////////////////////////////////////////////////////////////////

function photo9Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo9 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo99").on("change", function () {



    photo9Url(this);



});

//////////////////////////////////////////////////////////////////////

function photo10Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo10 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo100").on("change", function () {



    photo10Url(this);



});

/////////////////////////////////////////////////////////////////////


function photo11Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo11 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo110").on("change", function () {



    photo11Url(this);



});
/////////////////////////////////////////////////////////////////////////////////


function photo12Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo12 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo120").on("change", function () {



    photo12Url(this);



});

////////////////////////////////////////////////////////////////////////


function photo13Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo13 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo130").on("change", function () {


    photo13Url(this);



});
///////////////////////////////////////////////////////////////////////////////////


function photo14Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo14 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo140").on("change", function () {



    photo14Url(this);



});

/////////////////////////////////////////////////////////////////


function photo15Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo15 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo150").on("change", function () {


    photo15Url(this);



});

///////////////////////////////////////////////////////////////////////

function photo16Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo16 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo160").on("change", function () {



    photo16Url(this);



});
///////////////////////////////////////////////////////////////////////

function photo17Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo17 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo170").on("change", function () {



    photo17Url(this);



});

///////////////////////////////////////////////////////////////////////

function photo18Url(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.photo18 ').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#photo180").on("change", function () {


    photo18Url(this);



});
