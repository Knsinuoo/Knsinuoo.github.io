<?php
include "data.php";
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            width: 1700px;
            height: 900px;
          background-image: url('image/UIbg.png');
          background-size:contain;
          background-position:center center;
          
        }
        .accountbox{
            position:absolute;
            top: 40%;
            left: 50%;
            margin-left: -140px;
            margin-top: -40px;
        }
        .passwordbox{
            position:absolute;
            top: 43%;
            left: 50%;
            margin-left: -140px;
            margin-top: -15px;
        }
        .hei{
            height:30px;
        }
        .loginbut{
            background-color: #00000000;
            border: none;
            outline: blur();
            position:absolute;
            top:50%;
            left:50%;margin-left: -188px;
            margin-top: -20px;
        }
        .signbut{
            background-color: #00000000;
            border:none;
            outline: blur();
            position:absolute;
            top:50%;
            left:50%;margin-left: -188px;
            margin-top: 50px;
        }
        </style>
        
            <form action="Login.php" method="POST">
                <div class="accountbox">
                    <input type="text" size="40" class="hei" name="account" minlength="6" maxlength="20"> 
                </div>
                <div class="passwordbox">
                    <input type="password" size="40" class="hei" name="pass" minlength="6" maxlength="20" >
                </div>
                <div>
                    <button type="submit" class="loginbut" value="" onfocus="this.blur();"><img src="image/Login_butt.png" style="height: 44px;"></button>
                </div>
                <div>
                    <button type ="button" class="signbut" onfocus="this.blur();" onclick="javascript:location.href='http://localhost/Registered.php'" ><img src="image/signup_butt.png" style="height: 44px;"></button>
                </div>
            </form>
        </body>
        
</body>
</html>
<?php
$account = $_POST["account"];
$pass = $_POST["pass"];
$_SESSION['ACN']=$account;
$_SESSION['PSN']=$pass;

if($account && $pass)
{
$sql = "SELECT Account, Pass FROM usersdb WHERE Account='$account'";
$result = $conn->query($sql);

 if ($result->num_rows > 0) 
    {
    // output data of each row
    while($row = $result->fetch_assoc())
     {
        if($row["Pass"]==$pass)
        {echo "<script>alert('登入成功!');location.href='http://localhost/white_userin.php';</script>"; }
        else
        {echo "<script>alert('輸入正確密碼!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";}
    }
   } 

 else{echo "<script>alert('無此帳號!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; }

}

?>