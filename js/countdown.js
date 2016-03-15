var target_date = new Date('April 1 2016 00:00:00').getTime();
var days, hours, minutes, seconds;
var countdown = document.getElementById('timeremaining');
var countdownTimer = setInterval(function () {
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;

    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);

    if (days <= 0 && hours <= 0 && minutes <= 0 && seconds <= 0) {
        document.getElementById('timeremaining').innerHTML = '';
        clearInterval(countdownTimer);
    } else {
        if (days > 0) {
            days = days + '&emsp;' ;
        } else {
            days = ' ';
        }
        countdown.innerHTML = days + checkTime(hours) + '&emsp;' + checkTime(minutes) + '&emsp;' + checkTime(seconds);
    }
}, 1000);

function checkTime(i) {
    if (i < 10) {
        i = '0' + i
    };
    return i;
}