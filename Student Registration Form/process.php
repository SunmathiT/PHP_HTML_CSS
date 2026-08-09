<html>
<head>
    <title>Registration Result</title>


    <style>


        body{
            font-family:Arial;
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }


        .box{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
            width:400px;
            text-align:center;
        }


        h2{
            color:#1565C0;
        }


        p{
            margin:10px;
        }


        a{
            text-decoration:none;
            background:#1565C0;
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
$age=$_POST["age"];
$course=$_POST["course"];
$gender=$_POST["gender"];


if(empty($name) || empty($email) || empty($age) || empty($course) || empty($gender))
{
    echo "<h2 style='color:red;'>Error!</h2>";
    echo "<p>All fields are required.</p>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<h2 style='color:red;'>Invalid Email Address</h2>";
}
else
{
    echo "<h2>Registration Successful!</h2>";


    echo "<p><b>Name:</b> $name</p>";
    echo "<p><b>Email:</b> $email</p>";
    echo "<p><b>Age:</b> $age</p>";
    echo "<p><b>Course:</b> $course</p>";
    echo "<p><b>Gender:</b> $gender</p>";
}


}


?>


<br>


<a href="index.html">Back</a>


</div>


</body>
</html>