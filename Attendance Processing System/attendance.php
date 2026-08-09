<html>
<head>

<title>Attendance Report</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI",Arial,sans-serif;
}

body{
    background:#FFF3E0;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.report-box{
    width:540px;
    background:white;
    padding:28px;
    border-radius:12px;
    box-shadow:0 6px 14px rgba(0,0,0,0.15);
}

h1{
    text-align:center;
    color:#E65100;
    font-size:22px;
    margin-bottom:10px;
}

table{
    width:100%;
    margin-top:18px;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #FFCC80;
}

th{
    background:#FFE0B2;
    color:#BF360C;
}

th,td{
    padding:10px;
    text-align:left;
}

.remark{
    margin-top:16px;
    padding:12px;
    border-radius:6px;
    text-align:center;
    font-weight:bold;
}

.remark.pass{
    background:#E8F5E9;
    color:#2E7D32;
}

.remark.fail{
    background:#FFEBEE;
    color:#C62828;
}

.back-link{
    display:block;
    text-align:center;
    margin-top:20px;
}

a{
    display:inline-block;
    text-decoration:none;
    background:#FB8C00;
    color:white;
    padding:10px 22px;
    border-radius:6px;
}

a:hover{
    background:#E65100;
}

</style>

</head>

<body>

<div class="report-box">

<?php

// --- User-defined functions ---

function calculateAttendancePercentage($present, $working)
{
    if ($working <= 0) {
        return 0;
    }
    return ($present / $working) * 100;
}

function checkEligibility($percentage)
{
    return $percentage >= 75 ? "Eligible for Examination" : "Not Eligible for Examination";
}

function eligibilityRemark($percentage)
{
    if ($percentage >= 75) {
        return "Congratulations! You are eligible for the examination.";
    }
    return "Your attendance is below 75%. You are not eligible for the examination.";
}

// --- Read input ---

$name    = htmlspecialchars(trim($_POST["name"] ?? ""));
$working = (int) ($_POST["working"] ?? 0);
$present = (int) ($_POST["present"] ?? 0);

// --- Process using the functions above ---

$percentage = calculateAttendancePercentage($present, $working);
$status     = checkEligibility($percentage);
$isEligible = $percentage >= 75;

?>

<h1>Attendance Report</h1>

<table>
<tr><th>Student Name</th><td><?php echo $name; ?></td></tr>
<tr><th>Total Working Days</th><td><?php echo $working; ?></td></tr>
<tr><th>Days Present</th><td><?php echo $present; ?></td></tr>
<tr><th>Attendance Percentage</th><td><?php echo number_format($percentage, 2); ?>%</td></tr>
<tr><th>Examination Eligibility</th><td><?php echo $status; ?></td></tr>
</table>

<div class="remark <?php echo $isEligible ? 'pass' : 'fail'; ?>">
<?php echo eligibilityRemark($percentage); ?>
</div>

<div class="back-link">
<a href="index.html">Check Another Student</a>
</div>

</div>

</body>
</html>