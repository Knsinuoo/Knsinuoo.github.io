<?php
session_start();
include "data.php";
$account = $_SESSION["ACN"];
$pass = $_SESSION["PSN"];
$sql="SELECT Account, Pass, Alarmclock, music, musicII, nusicIII, musicIV, musicV FROM usersdb WHERE Account='$account'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //測試用//echo  $row["Account"]. $row["Pass"]. $row["Alarmclock"]. $row["music"]. $row["musicII"]. $row["musicIII"]. $row["musicIV"]. $row["musicV"];
   
    }
} else {
    //測試用//echo "0 results";
    
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>White Noise|白噪音</title>
    <link rel=stylesheet type="text/css" href="css/all.css">
    <link rel=stylesheet type="text/css" href="css/test.css">
</head>


<body background-color="rgb(255, 213, 122)">

    <div class="all">


        <div class="sep">
            <button class="sep1 button " id="sep1" onfocus="this.blur();"><img class="sep1-1" src="image/bell.png">
            </button>
            <button class="sep2 button " id="sep2" onfocus="this.blur();" onclick="javascript:location.href='http://localhost/Logout.php'"><img class="sep2-1" src="image/user.png">
            </button>

        </div>
        <div class="home">
            <div class="time">
                <div class="clock simple">
                <div >
                    <div class="hour12"></div>
                    <div class="hour1"></div>
                    <div class="hour2"></div>
                    <div class="hour3"></div>
                    <div class="hour4"></div>
                    <div class="hour5"></div>
                </div>
                <div class="hours-container">
                    <div class="hours"></div>
                </div>
                <div class="minutes-container">
                    <div class="minutes"></div>
                </div>
                <div class="seconds-container">
                    <div class="seconds"></div>
                </div>
            </div>
            </div>
            
            <div class="home2">
                <img class="home3" src="image/hou.png">

                <button class="grass grbtn" id="grs" onfocus="this.blur();"><img class="grass2" src="image/grass1.png"></button>
                <button class="tree1 grbtn" id="tr" onfocus="this.blur();"><img class="tree1-1" src="image/tree1.png"></button>
                <button class="tree2 grbtn" id="tr2" onfocus="this.blur();"><img class="tree2-2" src="image/tree2.png"></button>
                <button class="tea grbtn" id="te" onfocus="this.blur();"><img class="tea1" src="image/tea.png"></button>
                <button class="water grbtn" id="wa" onfocus="this.blur();"><img class="water1" src="image/water.png"></button>
                <div style="display: none">
                    <div style="display: none">
                        <audio controls id="grsnoisli">
                            <source src="audio/grass.mp3" type="audio/mpeg" loop=true>
                        </audio>

                    </div>

                    <audio controls id="trnoisli">
                        <source src="audio/tree.mp3" type="audio/mpeg" loop=true>
                    </audio>

                </div>


                <div style="display: none">
                    <audio controls id="tenoisli">
                        <source src="audio/tea.mp3" type="audio/mpeg" loop=true>
                    </audio>

                </div>

                <div style="display: none">
                    <audio controls id="wanoisli">
                        <source src="audio/water.mp3" type="audio/mpeg" loop=true>
                    </audio>

                </div>

            </div>

            <form action="white_userin.php" method="POST">
            <div  class="star">
                <button class="star1 button" id="dataI" onfocus="this.blur();" ><img class="star1-1" src="image/star_o.png" width="40px" height="40px">
                </button>
                <button class="star2 button" onfocus="this.blur();" onclick=update_dataII()><img class="star1-1" src="image/star_o.png" width="40px" height="40px">
                </button>
                <button class="star3 button" onfocus="this.blur();" onclick=update_dataIII()><img class="star1-1" src="image/star_o.png" width="40px" height="40px">
                </button>
                <button class="star4 button" onfocus="this.blur();" onclick=update_dataIV()><img class="star1-1" src="image/star_o.png" width="40px" height="40px">
                </button>
                <button class="star5 button" onfocus="this.blur();" onclick=update_dataV()><img class="star1-1" src="image/star_o.png" width="40px" height="40px">
                </button>
                <button class="yes button" onfocus="this.blur();" ><img class="yes2" src="image/yes.png" width="20px" height="20px">
                </button>
            </div>
            </form>
            <div class="weather">

                <button class="sun button" id="sun" onfocus="this.blur();"><img src="image/sun.png" width="35px" height="35px">
                </button>
                <button class="rain button" id="rain" onfocus="this.blur();"><img src="image/rain.png" width="40px" height="30px"></button>
                <button class="thunder button" id="thunder" onfocus="this.blur();"><img src="image/thunder.png" width=" 15px"
                        height="30px"></button>
                <button class="stop button" id="stop" onfocus="this.blur();"><img src="image/sount.png" width="40px" height="40px"></button>
                <div style="display: none">
                    <audio controls id="snoisli">
                        <source src="audio/fire.mp3" type="audio/mpeg" loop=true>
                    </audio>
                </div>

                <div style="display: none">
                    <audio controls id="rnoisli">
                        <source src="audio/Rain.mp3" type="audio/mpeg" loop=true>
                    </audio>
                </div>
                <div style="display: none">
                    <audio controls id="tnoisli">
                        <source src="audio/Thunder.mp3" type="audio/mpeg" loop=true>
                    </audio>
                </div>

            </div>


        </div>
        
        <script src="js/playandstop.js"></script><!--播放與停止-->
        <script src="js/Clock.js"></script><!--現在時間-->
        
    </div>


</body>

</html>
<?php

?>