<html>
<head>

<title>Evaluation Result</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#FFF0F5;
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
    color:#EC407A;
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

.result{
    text-align:center;
    color:green;
    font-weight:bold;
    margin-top:15px;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#EC407A;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$empid = htmlspecialchars(trim($_POST["empid"] ?? ""));
$name  = htmlspecialchars(trim($_POST["name"] ?? ""));
$score = (int) ($_POST["score"] ?? 0);

if($score>=90)
{
    $rating="Outstanding";
}
elseif($score>=80)
{
    $rating="Excellent";
}
elseif($score>=70)
{
    $rating="Good";
}
elseif($score>=60)
{
    $rating="Average";
}
else
{
    $rating="Needs Improvement";
}

echo "<h2>Employee Evaluation Report</h2>";

echo "<table>";

echo "<tr><th>Employee ID</th><td>$empid</td></tr>";
echo "<tr><th>Employee Name</th><td>$name</td></tr>";
echo "<tr><th>Performance Score</th><td>$score</td></tr>";
echo "<tr><th>Employee Rating</th><td><b>$rating</b></td></tr>";

echo "</table>";

echo "<p class='result'>Performance evaluation completed successfully.</p>";

?>

<center>

<a href="index.html">Evaluate Another Employee</a>

</center>

</div>

</body>
</html>