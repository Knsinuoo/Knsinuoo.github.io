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

        .signbut{
            background-color: #00000000;
            border: none;
            outline: none;
            position:absolute;
            top:50%;
            left:50%;margin-left: -188px;
            margin-top: -20px;
        }
        </style>
        
            <form action="Registered.php" method="POST">
                <div class="accountbox">
                    <input type="text" size="40" class="hei" name="account" minlength="6" maxlength="20"> 
                </div>
                <div class="passwordbox">
                    <input type="password" size="40" class="hei" name="pass" minlength="6" maxlength="20" >
                </div>
                <div>
                    <button type="submit" class="signbut" value="" onfocus="this.blur();"><img src="image/sign_butt.png" style="height: 44px;"></button>
                </div>
                
            </form>
        </body>
        
</body>
</html>
<?php
include "data.php";
$account = $_POST["account"];
$pass = $_POST["pass"];

if($account && $pass){
$sql = "SELECT Account, Pass FROM usersdb WHERE Account='$account'";
$result = $conn->query($sql);
if($account=="" && $pass=="")
{
    echo "<script>alert('註冊失敗,請輸入申請帳號密碼!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>"; 
}
else{
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<script>alert('註冊失敗,已有此帳號!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";     }
} 
else{
$sql = "INSERT INTO usersdb (Account, Pass)
VALUES ('$account', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<script>alert('註冊成功!');location.href='http://localhost/Login.php';</script>"; 
/*註冊成功按下按鈕反回頁面*/
}
}
}
?>