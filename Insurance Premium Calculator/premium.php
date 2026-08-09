<html>
<head>

<title>Policy Summary</title>

<style>

body{
    font-family:Arial;
    background:#E6F4EA;
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
    color:#1B5E20;
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
    background:#C8E6C9;
}

th,td{
    padding:10px;
    text-align:left;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#1B5E20;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$name     = htmlspecialchars(trim($_POST["name"] ?? ""));
$age      = (int) ($_POST["age"] ?? 0);
$term     = (int) ($_POST["term"] ?? 0);
$coverage = (float) ($_POST["coverage"] ?? 0);

if($age<=30)
{
    $rate=2;
}
elseif($age<=50)
{
    $rate=3;
}
else
{
    $rate=4;
}

$premium=($coverage*$rate)/100;

echo "<h2>Insurance Policy Summary</h2>";

echo "<table>";

echo "<tr><th>Policy Holder</th><td>$name</td></tr>";
echo "<tr><th>Age</th><td>$age Years</td></tr>";
echo "<tr><th>Policy Term</th><td>$term Years</td></tr>";
echo "<tr><th>Coverage Amount</th><td>₹".number_format($coverage,2)."</td></tr>";
echo "<tr><th>Premium Rate</th><td>$rate%</td></tr>";
echo "<tr><th>Premium Amount</th><td><b>₹".number_format($premium,2)."</b></td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Calculate Again</a>

</center>

</div>

</body>
</html>