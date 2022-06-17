
$(document).on("change", "#submit_request_form_check_input_field", function () {
    if ($("#submit_request_form_check_input_field").prop("checked")) {
        $(this).parent().toggleClass("active");
    }
});


$(document).on("change", "#sign_up_form_check_input_field", function () {
    if ($("#sign_up_form_check_input_field").prop("checked")) {
        $(this).parent().toggleClass("active");
    }
});


$(document).on("click", ".submit_request", function () {
     $(".submit_request_popup").addClass("open");
     $("body").addClass("hidden_body");
})





$(document).on("click", ".submit_request_popup_close", function () {
    $(".submit_request_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})



$(document).on("click", ".change_password_btn", function () {
     $(".change_password_popup").addClass("open");
     $("body").addClass("hidden_body");
})





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_password_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})



$(document).on("click", ".change_email_btn", function () {
     $(".change_email_popup").addClass("open");
     $("body").addClass("hidden_body");
})





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_email_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})









//
// $(document).on("click", ".change_password_popup_btn", function () {
//      $(".change_password_popup_code").addClass("open");
//      $("body").addClass("hidden_body");
//       $(".change_password_popup").removeClass("open");
// })





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_password_popup_code").removeClass("open");
    $("body").removeClass("hidden_body");
})



//
// $(document).on("click", ".change_email_btn1", function () {
//      $(".change_email_popup_code").addClass("open");
//      $("body").addClass("hidden_body");
//       $(".change_email_popup").removeClass("open");
//          $(".change_email_popup_new").removeClass("open");
// })





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_email_popup_code").removeClass("open");
    $("body").removeClass("hidden_body");
})



$(document).on("click", ".change_email_btn2", function () {
     $(".change_email_popup_new").addClass("open");
     $("body").addClass("hidden_body");
      $(".change_email_popup_code").removeClass("open");
       $(".change_email_popup").removeClass("open");
})





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_email_popup_new").removeClass("open");
    $("body").removeClass("hidden_body");
})








// $(document).on("click", ".code_btn", function () {
//      $(".change_password_popup_new").addClass("open");
//      $("body").addClass("hidden_body");
//       $(".change_password_popup_code").removeClass("open");
//        $(".change_password_popup").removeClass("open");
// })





$(document).on("click", ".change_password_popup_close", function () {
    $(".change_password_popup_new").removeClass("open");
    $("body").removeClass("hidden_body");
})





$(document).on("click", ".buy_btn", function () {
     $(".confirm_purchase_popup").addClass("open");
     $("body").addClass("hidden_body");
})

$(document).on("click", ".confirm_purchase_popup_close_btn", function () {
     $(".confirm_purchase_popup").removeClass("open");
     $("body").removeClass("hidden_body");
})




$(document).on("click", ".sign_in_btn", function () {
    $(".sign_in_popup").addClass("open");
    $("body").addClass("hidden_body");
})


$(document).on("click", ".sign_in_popup_close", function () {
    $(".sign_in_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})

$(document).on("click", ".sign_up_popup_btn", function () {
    $(".sign_up_popup").addClass("open");
    $(".sign_in_popup").removeClass("open");
    $("body").addClass("hidden_body");
})

$(document).on("click", ".sign_up_popup_close", function () {
    $(".sign_up_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})

$(document).on("click", ".hamburger_menu", function () {
    $(".mobile_version_popup").addClass("open");;
    $("body").addClass("hidden_body");
})


$(document).on("click", ".mobile_version_popup_close", function () {
    $(".mobile_version_popup").removeClass("open");
    $("body").removeClass("hidden_body");
})

$('body').click(function (event)
{
    if($(event.target).closest('.sign_up_popup').length && $(event.target).is('.sign_up_popup')) {
        $(".sign_up_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    if($(event.target).closest('.sign_in_popup').length && $(event.target).is('.sign_in_popup')) {
        $(".sign_in_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    if($(event.target).closest('.submit_request_popup').length && $(event.target).is('.submit_request_popup')) {
        $(".submit_request_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    
    if($(event.target).closest('.confirm_purchase_popup').length && $(event.target).is('.confirm_purchase_popup')) {
        $(".confirm_purchase_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    
      if($(event.target).closest('.change_password_popup').length && $(event.target).is('.change_password_popup')) {
        $(".change_password_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    
     if($(event.target).closest('.change_password_popup_code').length && $(event.target).is('.change_password_popup_code')) {
        $(".change_password_popup_code").removeClass("open");
        $("body").removeClass("hidden_body");
    }

 if($(event.target).closest('.change_password_popup_new').length && $(event.target).is('.change_password_popup_new')) {
        $(".change_password_popup_new").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    
    
    
          if($(event.target).closest('.change_email_popup').length && $(event.target).is('.change_email_popup')) {
        $(".change_email_popup").removeClass("open");
        $("body").removeClass("hidden_body");
    }
    
     if($(event.target).closest('.change_email_popup_code').length && $(event.target).is('.change_email_popup_code')) {
        $(".change_email_popup_code").removeClass("open");
        $("body").removeClass("hidden_body");
    }

 if($(event.target).closest('.change_email_popup_new').length && $(event.target).is('.change_email_popup_new')) {
        $(".change_email_popup_new").removeClass("open");
        $("body").removeClass("hidden_body");
    }

});



const swiper = new Swiper('#our_partners_swiper', {
    // Optional parameters
    slidesPerView: 4,
    direction: 'horizontal',
    loop: true,
    freeMode: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },



    breakpoints: {
        '320': {
            slidesPerView: 1,
        },
        '375': {
            slidesPerView: 1,

        },
        '376': {
            slidesPerView: 2,

        },
        '400': {
            slidesPerView: 2,

        },
        '500': {
            slidesPerView: 2,

        },
        '540': {
            slidesPerView: 2,

        },
        '541': {
            slidesPerView: 3,

        },
        '600': {
            slidesPerView: 3,

        },
        '700': {
            slidesPerView: 3,

        },
        '800': {
            slidesPerView: 3,

        },
        '900': {
            slidesPerView: 3,

        },
        '1000': {
            slidesPerView: 3,

        },
        '1100': {
            slidesPerView: 3,

        },
        '1150': {
            slidesPerView: 3,

        },
        '1151': {
            slidesPerView: 4,

        },
        '1200': {
            slidesPerView: 4,

        },
        '1300': {
            slidesPerView: 4,

        },
        '1400': {
            slidesPerView: 4,

        },
        '1500': {
            slidesPerView: 4,

        },
        '1600': {
            slidesPerView: 4,

        },
        '1700': {
            slidesPerView: 4,

        },
        '1800': {
            slidesPerView: 4,

        },
        '1920': {
            slidesPerView: 4,

        },
    }


});




$(".header_ul_link").click(function () {
    let id = $(this).attr("href");
    let scrollElem = $(id);
    let offsetTop = $(scrollElem).offset().top;
    $("html, body").animate({
        scrollTop: offsetTop - 200,
    }, 1000);

    $(".mobile_version_popup ").removeClass('open');
    $("body").removeClass('hidden_body');

});





/*audio*/


// Possible improvements:
// - Change timeline and volume slider into input sliders, reskinned
// - Change into Vue or React component
// - Be able to grab a custom title instead of "Music Song"
// - Hover over sliders to see preview of timestamp/volume change

const audioPlayer = document.querySelector(".audio-player");
const audio = new Audio(
    "https://ia800905.us.archive.org/19/items/FREE_background_music_dhalius/backsound.mp3"
);
//credit for song: Adrian kreativaweb@gmail.com

console.dir(audio);

audio.addEventListener(
    "loadeddata",
    () => {
        audioPlayer.querySelector(".time .length").textContent = getTimeCodeFromNum(
            audio.duration
        );
        audio.volume = .75;
    },
    false
);

//click on timeline to skip around
const timeline = audioPlayer.querySelector(".timeline");
timeline.addEventListener("click", e => {
    const timelineWidth = window.getComputedStyle(timeline).width;
    const timeToSeek = e.offsetX / parseInt(timelineWidth) * audio.duration;
    audio.currentTime = timeToSeek;
}, false);

//click volume slider to change volume
const volumeSlider = audioPlayer.querySelector(".controls .volume-slider");
volumeSlider.addEventListener('click', e => {
    const sliderWidth = window.getComputedStyle(volumeSlider).width;
    const newVolume = e.offsetX / parseInt(sliderWidth);
    audio.volume = newVolume;
    audioPlayer.querySelector(".controls .volume-percentage").style.width = newVolume * 100 + '%';
}, false)

//check audio percentage and update time accordingly
setInterval(() => {
    const progressBar = audioPlayer.querySelector(".progress");
    progressBar.style.width = audio.currentTime / audio.duration * 100 + "%";
    audioPlayer.querySelector(".time .current").textContent = getTimeCodeFromNum(
        audio.currentTime
    );
}, 500);

//toggle between playing and pausing on button click
const playBtn = audioPlayer.querySelector(".controls .toggle-play");
playBtn.addEventListener(
    "click",
    () => {
        if (audio.paused) {
            playBtn.classList.remove("play");
            playBtn.classList.add("pause");
            audio.play();
        } else {
            playBtn.classList.remove("pause");
            playBtn.classList.add("play");
            audio.pause();
        }
    },
    false
);

audioPlayer.querySelector(".volume-button").addEventListener("click", () => {
    const volumeEl = audioPlayer.querySelector(".volume-container .volume");
    audio.muted = !audio.muted;
    if (audio.muted) {
        volumeEl.classList.remove("icono-volumeMedium");
        volumeEl.classList.add("icono-volumeMute");
    } else {
        volumeEl.classList.add("icono-volumeMedium");
        volumeEl.classList.remove("icono-volumeMute");
    }
});

//turn 128 seconds into 2:08
function getTimeCodeFromNum(num) {
    let seconds = parseInt(num);
    let minutes = parseInt(seconds / 60);
    seconds -= minutes * 60;
    const hours = parseInt(minutes / 60);
    minutes -= hours * 60;

    if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
    return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
    ).padStart(2, 0)}`;
}
