<html>
<head>

<title>BMI Report</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI",Arial,sans-serif;
}

body{
    background:#EDE7F6;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.report-box{
    width:500px;
    background:white;
    padding:28px;
    border-radius:12px;
    box-shadow:0 6px 14px rgba(0,0,0,0.15);
}

h1{
    text-align:center;
    color:#4527A0;
    font-size:22px;
    margin-bottom:10px;
}

table{
    width:100%;
    margin-top:18px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #D1C4E9;
}

th{
    background:#D1C4E9;
    color:#311B92;
}

th,td{
    padding:10px;
    text-align:center;
}

.back-link{
    display:block;
    text-align:center;
    margin-top:20px;
}

a{
    display:inline-block;
    text-decoration:none;
    background:#673AB7;
    color:white;
    padding:10px 22px;
    border-radius:6px;
}

a:hover{
    background:#4527A0;
}

</style>

</head>

<body>

<div class="report-box">

<?php

// --- Input ---

$name   = htmlspecialchars(trim($_POST["name"] ?? ""));
$height = (float) ($_POST["height"] ?? 0);
$weight = (float) ($_POST["weight"] ?? 0);

// --- Calculate BMI ---

$bmi = $height > 0 ? $weight / ($height * $height) : 0;

// --- Determine status and recommendation ---

if ($bmi < 18.5) {
    $status = "Underweight";
    $recommendation = "Eat a balanced, nutritious diet and consult a doctor if needed.";
} elseif ($bmi < 25) {
    $status = "Normal Weight";
    $recommendation = "Maintain your healthy lifestyle with regular exercise.";
} elseif ($bmi < 30) {
    $status = "Overweight";
    $recommendation = "Exercise regularly and reduce high-calorie foods.";
} else {
    $status = "Obese";
    $recommendation = "Consult a healthcare professional and follow a healthy diet plan.";
}

?>

<h1>BMI Report</h1>

<table>
<tr><th>Name</th><td><?php echo $name; ?></td></tr>
<tr><th>Height</th><td><?php echo $height; ?> m</td></tr>
<tr><th>Weight</th><td><?php echo $weight; ?> kg</td></tr>
<tr><th>BMI</th><td><?php echo number_format($bmi, 2); ?></td></tr>
<tr><th>Health Status</th><td><?php echo $status; ?></td></tr>
<tr><th>Recommendation</th><td><?php echo $recommendation; ?></td></tr>
</table>

<div class="back-link">
<a href="index.html">Calculate Again</a>
</div>

</div>

</body>
</html>