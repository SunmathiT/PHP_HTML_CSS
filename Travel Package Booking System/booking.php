<!DOCTYPE html>
<html>
<head>

<title>Booking Confirmation</title>

<style>

body{
    font-family:Arial;
    background:#FFF3E0;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:520px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#D84315;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th{
    background:#FFCCBC;
}

th,td{
    padding:10px;
    text-align:left;
}

.success{
    color:green;
    text-align:center;
    font-weight:bold;
    margin-top:15px;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#D84315;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$package=$_POST["package"];
$persons=$_POST["persons"];

echo "<h2>Booking Confirmation</h2>";

echo "<table>";

echo "<tr><th>Customer Name</th><td>$name</td></tr>";
echo "<tr><th>Email</th><td>$email</td></tr>";
echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
echo "<tr><th>Travel Package</th><td>$package</td></tr>";
echo "<tr><th>Number of Travelers</th><td>$persons</td></tr>";

echo "</table>";

echo "<p class='success'>Your travel package has been booked successfully.</p>";

?>

<center>

<a href="index.html">Book Another Package</a>

</center>

</div>

</body>
</html>