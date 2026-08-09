<html>
<head>

<title>Salary Report</title>

<style>

body{
    font-family:Arial;
    background:#FFF8E1;
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
    color:#F57F17;
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
    background:#FFECB3;
}

th,td{
    padding:10px;
    text-align:left;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#F57F17;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

function calculateGrossSalary($basic)
{
    $hra = $basic * 0.20;
    $da = $basic * 0.10;
    return $basic + $hra + $da;
}

function calculateDeduction($basic)
{
    return $basic * 0.12;
}

function calculateNetSalary($gross,$deduction)
{
    return $gross - $deduction;
}

$name  = htmlspecialchars(trim($_POST["name"] ?? ""));
$empid = htmlspecialchars(trim($_POST["empid"] ?? ""));
$basic = (float) ($_POST["basic"] ?? 0);

$hra=$basic*0.20;
$da=$basic*0.10;

$gross=calculateGrossSalary($basic);
$deduction=calculateDeduction($basic);
$net=calculateNetSalary($gross,$deduction);

echo "<h2>Employee Salary Report</h2>";

echo "<table>";

echo "<tr><th>Employee Name</th><td>$name</td></tr>";
echo "<tr><th>Employee ID</th><td>$empid</td></tr>";
echo "<tr><th>Basic Salary</th><td>₹".number_format($basic,2)."</td></tr>";
echo "<tr><th>HRA (20%)</th><td>₹".number_format($hra,2)."</td></tr>";
echo "<tr><th>DA (10%)</th><td>₹".number_format($da,2)."</td></tr>";
echo "<tr><th>Gross Salary</th><td>₹".number_format($gross,2)."</td></tr>";
echo "<tr><th>PF Deduction (12%)</th><td>₹".number_format($deduction,2)."</td></tr>";
echo "<tr><th>Net Salary</th><td><b>₹".number_format($net,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Another Salary</a>

</center>

</div>

</body>
</html>