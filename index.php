<!DOCTYPE html>
<html>

<head>
    <title>Gamel-AR</title>
    
    <!-- Link ke main CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:700|Roboto:400,300' rel='stylesheet' type='text/css'>
    
</head>

<body>
    <div id="kiri">
        <div id="inner-kiri">
            <a href="index.html" id="home-nav">
                <img class="logo" src="assets/Logo.png">
                <h1 class="judul"> G<span style="font-size:30px; font-weight:300;">AMEL-</span>AR </h1>
                <p class="subjudul">You're one touch away from Gamelan</p>
				<p id="timeremaining"> time </p>
            </a>
            <!--            <hr color="white" width="300px">-->
            <br>
            <img src="assets/gambarGamelan.png">
            <table class="navigation">
                <td>
                    <a href="pages/konten.html#Sec1" target="iframe1">
                        <p>Product</p>
                    </a>
                </td>
                <td>
                    <a href="pages/konten.html#Sec2" target="iframe1">
                        <p>Download</p>
                    </a>
                </td>
                <td>
                    <a href="pages/konten.html#Sec3" target="iframe1">
                        <p>About Us</p>
                    </a>
                </td>
            </table>
        </div>
		<script>
	var target_date = new Date('April 1 2016 10:52:00').getTime();
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

        if(days <= 0 && hours <= 0 && minutes <= 0 && seconds <= 0 )
        {
           document.getElementById('timeremaining').innerHTML = '';
           clearInterval(countdownTimer);              
        }
        else
        {       
            if(days>0)
              {
                 days= days+' days ';
              } 
              else
              {
                 days='';
              }            
            countdown.innerHTML =' ' + days + checkTime(hours) + ':'+ checkTime(minutes) + ':' + checkTime(seconds);    
        }
    }, 1000);

    function checkTime(i) {
        if (i < 10) {i = '0' + i};  
        return i;
    }  </script>
        <!--                <p style="color: red"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." </p>-->
    </div>
		    
    </div>

    <div id="kanan">
        <iframe class="iframe" src="pages/konten.html" name="iframe1"></iframe>
    </div>

</body>

</html> 	