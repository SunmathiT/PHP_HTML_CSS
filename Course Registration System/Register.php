<html>
<head>

<title>Registration Details</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#E0F2F1;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#00695C;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table,th,td{
    border:1px solid #999;
}

th{
    background:#B2DFDB;
    padding:12px;
    text-align:left;
}

td{
    padding:12px;
}

.success{
    color:green;
    font-weight:bold;
    text-align:center;
    margin-top:20px;
}

.error{
    color:red;
    font-weight:bold;
    text-align:center;
    margin-top:20px;
}

.btn{
    display:block;
    width:220px;
    margin:25px auto 0;
    text-align:center;
    text-decoration:none;
    background:#00695C;
    color:white;
    padding:12px;
    border-radius:5px;
}

.btn:hover{
    background:#004D40;
}

</style>

</head>

<body>

<div class="box">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $mobile = htmlspecialchars(trim($_POST["mobile"] ?? ""));
    $workshop = htmlspecialchars($_POST["workshop"] ?? "");
    $mode = htmlspecialchars($_POST["mode"] ?? "");

    if(empty($name) || empty($email) || empty($mobile) || empty($workshop) || empty($mode))
    {
        echo "<p class='error'>Please fill all the required fields.</p>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<p class='error'>Invalid Email Address.</p>";
    }
    elseif(!preg_match("/^[0-9]{10}$/", $mobile))
    {
        echo "<p class='error'>Invalid Mobile Number. Must be 10 digits.</p>";
    }
    else
    {
        echo "<h2>Workshop Registration Details</h2>";

        echo "<table>";
        echo "<tr><th>Participant Name</th><td>$name</td></tr>";
        echo "<tr><th>Email Address</th><td>$email</td></tr>";
        echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
        echo "<tr><th>Selected Workshop</th><td>$workshop</td></tr>";
        echo "<tr><th>Attendance Mode</th><td>$mode</td></tr>";
        echo "</table>";

        echo "<p class='success'>Registration Completed Successfully!</p>";
    }
}
else
{
    echo "<p class='error'>Please submit the registration form first.</p>";
}

?>

<a href="index.html" class="btn">Register Another Participant</a>

</div>

</body>
</html>