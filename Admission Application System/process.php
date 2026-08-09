<html>
<head>

<title>Admission Acknowledgement</title>

<style>

body{
    font-family:Arial;
    background:#F3E5F5;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    width:450px;
    padding:30px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    color:#6A1B9A;
}

p{
    margin:10px;
}

a{
    text-decoration:none;
    background:#6A1B9A;
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
$email=trim($_POST["email"]);
$phone=trim($_POST["phone"]);
$dob=$_POST["dob"];
$course=$_POST["course"];
$gender=$_POST["gender"] ?? "";

if(empty($name) || empty($email) || empty($phone) || empty($dob) || empty($course) || empty($gender))
{
    echo "<h2 style='color:red;'>Application Failed</h2>";
    echo "<p>Please fill all the required fields.</p>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<h2 style='color:red;'>Invalid Email Address</h2>";
}
elseif(!preg_match("/^[0-9]{10}$/",$phone))
{
    echo "<h2 style='color:red;'>Invalid Phone Number</h2>";
    echo "<p>Phone number must be exactly 10 digits.</p>";
}
else
{
    $name=htmlspecialchars($name);
    $email=htmlspecialchars($email);
    $phone=htmlspecialchars($phone);
    $dob=htmlspecialchars($dob);
    $course=htmlspecialchars($course);
    $gender=htmlspecialchars($gender);

    echo "<h2>Admission Acknowledgement</h2>";

    echo "<p>Your application has been submitted successfully.</p>";

    echo "<p><b>Name :</b> $name</p>";
    echo "<p><b>Email :</b> $email</p>";
    echo "<p><b>Phone :</b> $phone</p>";
    echo "<p><b>Date of Birth :</b> $dob</p>";
    echo "<p><b>Course :</b> $course</p>";
    echo "<p><b>Gender :</b> $gender</p>";

    echo "<h3 style='color:green;'>Application Received Successfully</h3>";
}

}

?>

<br>

<a href="index.html">Back</a>

</div>

</body>
</html>