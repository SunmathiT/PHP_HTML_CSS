<html>
<head>
<title>Student Result</title>


<style>


body{
    font-family:Arial;
    background:#ECEFF1;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}


.box{
    width:500px;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 10px rgba(0,0,0,0.2);
}


h2{
    text-align:center;
    color:#37474F;
}


table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}


table,th,td{
    border:1px solid black;
}


th,td{
    padding:10px;
    text-align:center;
}


th{
    background:#FFECB3;
    color:#37474F;
}


a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#37474F;
    color:#FFC107;
    padding:10px 20px;
    border-radius:5px;
    font-weight:bold;
}


</style>
</head>


<body>


<div class="box">


<?php


function calculateTotal($a,$b,$c,$d,$e)
{
    return $a+$b+$c+$d+$e;
}


function calculateAverage($total)
{
    return $total/5;
}


function calculateGrade($avg)
{
    if($avg>=90)
        return "A+";
    elseif($avg>=80)
        return "A";
    elseif($avg>=70)
        return "B";
    elseif($avg>=60)
        return "C";
    elseif($avg>=50)
        return "D";
    else
        return "Fail";
}


$name=$_POST["name"];
$tamil=$_POST["tamil"];
$english=$_POST["english"];
$maths=$_POST["maths"];
$science=$_POST["science"];
$social=$_POST["social"];


$total=calculateTotal($tamil,$english,$maths,$science,$social);
$average=calculateAverage($total);
$grade=calculateGrade($average);


echo "<h2>Student Result</h2>";


echo "<table>";


echo "<tr><th>Student Name</th><td>$name</td></tr>";
echo "<tr><th>Total Marks</th><td>$total / 500</td></tr>";
echo "<tr><th>Average</th><td>".number_format($average,2)."</td></tr>";
echo "<tr><th>Grade</th><td>$grade</td></tr>";


echo "</table>";


?>


<br>


<a href="index.html">Back</a>


</div>


</body>
</html>