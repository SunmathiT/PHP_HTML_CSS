<html>
<head>

<title>Electricity Bill</title>

<style>

body{
    font-family:Arial;
    background:#E1F5FE;
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
    box-shadow:0 5px 12px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:#0277BD;
}

table{
    width:100%;
    margin-top:20px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:10px;
    text-align:center;
}

th{
    background:#B3E5FC;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#0277BD;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$name  = htmlspecialchars(trim($_POST["name"] ?? ""));
$units = (int) ($_POST["units"] ?? 0);

if($units<=100)
{
    $rate=1.00;
}
elseif($units<=200)
{
    $rate=2.00;
}
elseif($units<=300)
{
    $rate=3.50;
}
else
{
    $rate=5.00;
}

$total=$units*$rate;

echo "<h2>Electricity Bill</h2>";

echo "<table>";

echo "<tr><th>Consumer Name</th><td>$name</td></tr>";
echo "<tr><th>Units Consumed (KL)</th><td>$units</td></tr>";
echo "<tr><th>Rate per Unit</th><td>₹".$rate."</td></tr>";
echo "<tr><th>Total Bill Amount</th><td><b>₹".number_format($total,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Another Bill</a>

</center>

</div>

</body>
</html>