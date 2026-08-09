<html>
<head>


<title>Appointment Confirmation</title>


<style>


body{
    font-family:Arial,sans-serif;
    background:#FBE9E7;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}


.box{
    width:550px;
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
    width:40%;
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


.error{
    color:red;
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


$parent=trim($_POST["parent"]);
$student=trim($_POST["student"]);
$class=trim($_POST["class"]);
$slot=$_POST["slot"];
$mobile=trim($_POST["mobile"]);


if(empty($parent) || empty($student) || empty($class) || empty($slot) || empty($mobile))
{
    echo "<p class='error'>Please fill all the required fields.</p>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<p class='error'>Invalid Contact Number.</p>";
}
else
{
    echo "<h2>Appointment Confirmation</h2>";


    echo "<table>";


    echo "<tr><th>Parent Name</th><td>$parent</td></tr>";
    echo "<tr><th>Student Name</th><td>$student</td></tr>";
    echo "<tr><th>Class</th><td>$class</td></tr>";
    echo "<tr><th>Meeting Slot</th><td>$slot</td></tr>";
    echo "<tr><th>Contact Number</th><td>$mobile</td></tr>";


    echo "</table>";


    echo "<p class='success'>Your Parent–Teacher meeting has been booked successfully.</p>";
}


?>


<center>


<a href="index.html">Book Another Appointment</a>


</center>


</div>


</body>
</html>