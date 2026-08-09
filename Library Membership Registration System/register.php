<html>
<head>

<title>Membership Information</title>

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
    width:520px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#512DA8;
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
    background:#D1C4E9;
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
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#512DA8;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$name       = htmlspecialchars(trim($_POST["name"] ?? ""));
$email      = htmlspecialchars(trim($_POST["email"] ?? ""));
$mobile     = htmlspecialchars(trim($_POST["mobile"] ?? ""));
$membership = htmlspecialchars($_POST["membership"] ?? "");

if(empty($name) || empty($email) || empty($mobile) || empty($membership))
{
    echo "<p class='error'>Please fill all the required fields.</p>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<p class='error'>Invalid Email ID.</p>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<p class='error'>Invalid Mobile Number.</p>";
}
else
{
    $memberId="LIB".rand(1000,9999);

    echo "<h2>Membership Information</h2>";

    echo "<table>";

    echo "<tr><th>Member ID</th><td>$memberId</td></tr>";
    echo "<tr><th>Member Name</th><td>$name</td></tr>";
    echo "<tr><th>Email</th><td>$email</td></tr>";
    echo "<tr><th>Mobile</th><td>$mobile</td></tr>";
    echo "<tr><th>Membership Type</th><td>$membership</td></tr>";

    echo "</table>";

    echo "<p class='success'>Library Membership Registered Successfully.</p>";
}

?>

<center>

<a href="index.html">Register Another Member</a>

</center>

</div>

</body>
</html>