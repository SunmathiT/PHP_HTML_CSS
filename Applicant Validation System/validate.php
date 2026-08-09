<html>
<head>

<title>Validation Result</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI",Arial,sans-serif;
}

body{
    background:#E0F7FA;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.result-box{
    width:480px;
    background:white;
    padding:28px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 6px 14px rgba(0,0,0,0.15);
}

h1{
    color:#00695C;
    font-size:22px;
    margin-bottom:18px;
}

.result-line{
    padding:8px 0;
    font-size:15px;
}

.pass{
    color:#00796B;
    font-weight:bold;
}

.fail{
    color:#C62828;
    font-weight:bold;
}

.summary{
    margin-top:16px;
    padding:12px;
    border-radius:6px;
    font-size:16px;
}

.summary.pass{
    background:#E0F2F1;
}

.summary.fail{
    background:#FFEBEE;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#00897B;
    color:white;
    padding:10px 22px;
    border-radius:6px;
}

a:hover{
    background:#00695C;
}

</style>

</head>

<body>

<div class="result-box">

<h1>Validation Report</h1>

<?php

$email    = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";
$mobile   = trim($_POST["mobile"] ?? "");

// Each rule: label, pass/fail condition, message shown when it fails
$checks = [
    [
        "label" => "Email ID",
        "valid" => filter_var($email, FILTER_VALIDATE_EMAIL) !== false,
        "fail_msg" => "Invalid Email ID"
    ],
    [
        "label" => "Password",
        "valid" => strlen($password) >= 8,
        "fail_msg" => "Password must contain at least 8 characters"
    ],
    [
        "label" => "Mobile Number",
        "valid" => (bool) preg_match("/^[0-9]{10}$/", $mobile),
        "fail_msg" => "Invalid Mobile Number"
    ],
];

$allValid = true;

foreach ($checks as $check) {
    if ($check["valid"]) {
        echo "<p class='result-line pass'>&#10004; Valid " . $check["label"] . "</p>";
    } else {
        echo "<p class='result-line fail'>&#10008; " . $check["fail_msg"] . "</p>";
        $allValid = false;
    }
}

if ($allValid) {
    echo "<div class='summary pass'>All Details are Valid.</div>";
} else {
    echo "<div class='summary fail'>Validation Failed.</div>";
}

?>

<a href="index.html">Try Again</a>

</div>

</body>
</html>