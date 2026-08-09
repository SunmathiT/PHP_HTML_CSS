<html>
<head>


<title>Patient Registration Report</title>


<style>


body{
    font-family:Arial;
    background:#E0F2F1;
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
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}


h2{
    text-align:center;
    color:#00695C;
}


table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}


table,th,td{
    border:1px solid black;
}


th,td{
    padding:10px;
}


th{
    background:#B2DFDB;
}


.success{
    text-align:center;
    color:green;
    font-weight:bold;
    margin-top:15px;
}


.error{
    text-align:center;
    color:red;
    font-weight:bold;
}


a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#00695C;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}


</style>


</head>


<body>


<div class="box">


<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
{


$name=trim($_POST["name"]);
$age=$_POST["age"];
$gender=$_POST["gender"];
$phone=trim($_POST["phone"]);
$address=trim($_POST["address"]);


if(empty($name) || empty($age) || empty($gender) || empty($phone) || empty($address))
{
    echo "<p class='error'>Please fill all the required fields.</p>";
}
elseif(!preg_match("/^[0-9]{10}$/",$phone))
{
    echo "<p class='error'>Invalid Phone Number.</p>";
}
else
{
    echo "<h2>Patient Registration Report</h2>";


    echo "<table>";


    echo "<tr><th>Patient Name</th><td>$name</td></tr>";
    echo "<tr><th>Age</th><td>$age</td></tr>";
    echo "<tr><th>Gender</th><td>$gender</td></tr>";
    echo "<tr><th>Phone Number</th><td>$phone</td></tr>";
    echo "<tr><th>Address</th><td>$address</td></tr>";


    echo "</table>";


    echo "<p class='success'>Patient Registered Successfully.</p>";
}


}


?>


<center>
<a href="index.html">Register Another Patient</a>
</center>


</div>


</body>
</html>