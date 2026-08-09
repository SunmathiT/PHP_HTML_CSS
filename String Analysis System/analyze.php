<html>
<head>

<title>Analysis Report</title>

<style>

body{
    font-family:Arial;
    background:#FCE4EC;
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
    color:#AD1457;
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
    background:#F8BBD0;
}

a{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#AD1457;
    color:white;
    padding:10px 20px;
    border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<?php

$title = $_POST["title"];

$vowels = 0;
$consonants = 0;
$digits = 0;
$special = 0;

$titleLower = strtolower($title);

for($i=0;$i<strlen($titleLower);$i++)
{
    $ch = $titleLower[$i];

    if(strpos("aeiou",$ch)!==false)
    {
        $vowels++;
    }
    elseif(ctype_alpha($ch))
    {
        $consonants++;
    }
    elseif(ctype_digit($ch))
    {
        $digits++;
    }
    elseif($ch!=" ")
    {
        $special++;
    }
}

echo "<h2>String Analysis Report</h2>";

echo "<table>";

echo "<tr><th>Entered Title</th><td>$title</td></tr>";
echo "<tr><th>Vowels</th><td>$vowels</td></tr>";
echo "<tr><th>Consonants</th><td>$consonants</td></tr>";
echo "<tr><th>Digits</th><td>$digits</td></tr>";
echo "<tr><th>Special Characters</th><td>$special</td></tr>";

echo "</table>";

?>

<center>

<a href="index.html">Analyze Another String</a>

</center>

</div>

</body>
</html>