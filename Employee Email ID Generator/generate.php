<html>
<head>

<title>Staff Email ID</title>

<style>

body{
    font-family:Arial;
    background:#E8EAF6;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.box{
    width:450px;
    background:white;
    padding:25px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}

h2{
    color:#283593;
}

p{
    margin:12px 0;
    font-size:18px;
}

a{
    text-decoration:none;
    background:#283593;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$name   = htmlspecialchars(trim($_POST["name"] ?? ""));
$empid  = htmlspecialchars(trim($_POST["empid"] ?? ""));
$domain = htmlspecialchars(trim($_POST["domain"] ?? ""));

$nameParts = explode(" ", trim($name));

$firstName = $nameParts[0] ?? "";
$lastName  = $nameParts[count($nameParts) - 1] ?? "";
$firstInitial = strtolower(substr($firstName, 0, 1));
$lastNameLower = strtolower($lastName);

$paddedId = str_pad($empid, 4, "0", STR_PAD_LEFT);
$emailName = $firstInitial . $lastNameLower . $paddedId;
$email = $emailName . "@" . $domain;

echo "<h2>Staff Email ID Generated</h2>";

echo "<p><b>Full Name :</b> $name</p>";
echo "<p><b>Employee ID :</b> $paddedId</p>";
echo "<p><b>Email ID :</b> $email</p>";

?>

<br><br>

<a href="index.html">Generate Another</a>

</div>

</body>
</html>