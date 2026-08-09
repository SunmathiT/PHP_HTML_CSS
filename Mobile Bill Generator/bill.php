<html>
<head>

<title>Mobile Bill Summary</title>

<style>

body{
    font-family:Arial;
    background:#E0F7FA;
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
    color:#00695C;
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
    background:#B2DFDB;
}

th,td{
    padding:10px;
    text-align:left;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#00897B;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

function calculateBill($plan,$minutes)
{
    if($plan=="Basic")
    {
        return 199 + ($minutes * 0.50);
    }
    elseif($plan=="Standard")
    {
        return 399 + ($minutes * 0.40);
    }
    else
    {
        return 599 + ($minutes * 0.30);
    }
}

$name=$_POST["name"];
$mobile=$_POST["mobile"];
$plan=$_POST["plan"];
$minutes=$_POST["minutes"];

$total=calculateBill($plan,$minutes);

echo "<h2>Mobile Bill Summary</h2>";

echo "<table>";

echo "<tr><th>Customer Name</th><td>$name</td></tr>";
echo "<tr><th>Mobile Number</th><td>$mobile</td></tr>";
echo "<tr><th>Tariff Plan</th><td>$plan</td></tr>";
echo "<tr><th>Call Minutes Used</th><td>$minutes</td></tr>";
echo "<tr><th>Total Bill</th><td><b>₹".number_format($total,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Generate Another Bill</a>

</center>

</div>

</body>
</html>