<html>
<head>

<title>Generated Password</title>

<style>

body{
    font-family:Arial;
    background:#EDE7F6;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:25px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    color:#4527A0;
}

.password{
    margin:20px 0;
    padding:15px;
    background:#D1C4E9;
    font-size:22px;
    font-weight:bold;
    border-radius:5px;
    word-break:break-all;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#4527A0;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$length=$_POST["length"];

$uppercase="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase="abcdefghijklmnopqrstuvwxyz";
$digits="0123456789";
$special="@#$%&*!?";
$all=$uppercase.$lowercase.$digits.$special;

$password="";

$password.=$uppercase[rand(0,strlen($uppercase)-1)];
$password.=$lowercase[rand(0,strlen($lowercase)-1)];
$password.=$digits[rand(0,strlen($digits)-1)];
$password.=$special[rand(0,strlen($special)-1)];

for($i=4;$i<$length;$i++)
{
    $password.=$all[rand(0,strlen($all)-1)];
}

$password=str_shuffle($password);

echo "<h2>Secure Password</h2>";

echo "<div class='password'>$password</div>";

?>

<br>

<a href="index.html">Generate Another</a>

</div>

</body>
</html>