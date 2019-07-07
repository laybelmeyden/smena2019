$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.dropdown-trigger').dropdown();
    $('div.alert').delay(3000).slideUp(300);
    $('.collapsible').collapsible();
    $('.modal').modal();
});


// var slideNow = 1;
// var slideCount = $('#slidewrapper').children().length;
// var slideInterval = 3000;
// var navBtnId = 0;
// var translateWidth = 0;

// $(document).ready(function() {
//     var switchInterval = setInterval(nextSlide, slideInterval);

//     $('#viewport').hover(function() {
//         clearInterval(switchInterval);
//     }, function() {
//         switchInterval = setInterval(nextSlide, slideInterval);
//     });

//     $('#next-btn').click(function() {
//         nextSlide();
//     });

//     $('#prev-btn').click(function() {
//         prevSlide();
//     });

//     $('.slide-nav-btn').click(function() {
//         navBtnId = $(this).index();

//         if (navBtnId + 1 != slideNow) {
//             translateWidth = -$('#viewport').width() * (navBtnId);
//             $('#slidewrapper').css({
//                 'transform': 'translate(' + translateWidth + 'px, 0)',
//                 '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
//                 '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
//             });
//             slideNow = navBtnId + 1;
//         }
//     });
// });


// function nextSlide() {
//     if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
//         $('#slidewrapper').css('transform', 'translate(0, 0)');
//         slideNow = 1;
//     } else {
//         translateWidth = -$('#viewport').width() * (slideNow);
//         $('#slidewrapper').css({
//             'transform': 'translate(' + translateWidth + 'px, 0)',
//             '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
//             '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
//         });
//         slideNow++;
//     }
// }

// function prevSlide() {
//     if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
//         translateWidth = -$('#viewport').width() * (slideCount - 1);
//         $('#slidewrapper').css({
//             'transform': 'translate(' + translateWidth + 'px, 0)',
//             '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
//             '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
//         });
//         slideNow = slideCount;
//     } else {
//         translateWidth = -$('#viewport').width() * (slideNow - 2);
//         $('#slidewrapper').css({
//             'transform': 'translate(' + translateWidth + 'px, 0)',
//             '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
//             '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
//         });
//         slideNow--;
//     }
// }

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        total: t,
        days: days,
        hours: hours,
        minutes: minutes,
        seconds: seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");
    var hoursSpan = clock.querySelector(".hours");
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
        var t = getTimeRemaining(endtime);

        if (t.total <= 0) {
            document.getElementById("clockdiv").className = "hidden";
            document.getElementById("deadline-messadge").className = "visible";
            clearInterval(timeinterval);
            return true;
        }

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = "November 23 2019 00:00:00 GMT+0300";
initializeClock("clockdiv", deadline);