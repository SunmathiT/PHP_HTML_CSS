<html>
<head>

<title>Faculty Profile</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#FCE4EC;
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
    color:#880E4F;
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
    background:#F8BBD0;
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
    background:#880E4F;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$facid       = htmlspecialchars(trim($_POST["facid"] ?? ""));
$name        = htmlspecialchars(trim($_POST["name"] ?? ""));
$email       = htmlspecialchars(trim($_POST["email"] ?? ""));
$mobile      = htmlspecialchars(trim($_POST["mobile"] ?? ""));
$department  = htmlspecialchars($_POST["department"] ?? "");
$designation = htmlspecialchars(trim($_POST["designation"] ?? ""));

if(empty($facid) || empty($name) || empty($email) || empty($mobile) || empty($department) || empty($designation))
{
    echo "<p class='error'>All fields are required.</p>";
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
    echo "<h2>Faculty Profile</h2>";

    echo "<table>";

    echo "<tr><th>Faculty ID</th><td>$facid</td></tr>";
    echo "<tr><th>Faculty Name</th><td>$name</td></tr>";
    echo "<tr><th>Email ID</th><td>$email</td></tr>";
    echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
    echo "<tr><th>Department</th><td>$department</td></tr>";
    echo "<tr><th>Designation</th><td>$designation</td></tr>";

    echo "</table>";

    echo "<p class='success'>Faculty Information Verified Successfully.</p>";
}

?>

<center>

<a href="index.html">Add Another Faculty</a>

</center>

</div>

</body>

</html>