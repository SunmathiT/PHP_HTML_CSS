<html>
<head>

<title>Result Analysis</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#E0F7FA;
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
    color:#006064;
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
    background:#B2EBF2;
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
    background:#006064;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

function calculatePercentage($marks,$total)
{
    return ($marks/$total)*100;
}

function getClass($percentage)
{
    if($percentage>=75)
    {
        return "Distinction";
    }
    elseif($percentage>=60)
    {
        return "First Class";
    }
    elseif($percentage>=50)
    {
        return "Second Class";
    }
    elseif($percentage>=40)
    {
        return "Pass";
    }
    else
    {
        return "Fail";
    }
}

$name   = htmlspecialchars(trim($_POST["name"] ?? ""));
$certid = htmlspecialchars(trim($_POST["certid"] ?? ""));
$marks  = (float) ($_POST["marks"] ?? 0);
$total  = (float) ($_POST["total"] ?? 1);

$percentage=calculatePercentage($marks,$total);
$class=getClass($percentage);

echo "<h2>Certification Result</h2>";

echo "<table>";

echo "<tr><th>Student Name</th><td>$name</td></tr>";
echo "<tr><th>Certificate ID</th><td>$certid</td></tr>";
echo "<tr><th>Marks Obtained</th><td>$marks / $total</td></tr>";
echo "<tr><th>Percentage</th><td>".number_format($percentage,2)."%</td></tr>";
echo "<tr><th>Class Obtained</th><td><b>$class</b></td></tr>";

echo "</table>";

echo "<p class='result'>Result analysis completed successfully.</p>";

?>

<center>

<a href="index.html">Analyze Another Result</a>

</center>

</div>

</body>
</html>