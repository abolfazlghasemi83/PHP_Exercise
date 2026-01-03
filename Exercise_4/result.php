<?php
$num1 = (float) $_GET['num1'];
$num2 = (float) $_GET['num2'];
$op = $_GET['operator'];


if ($op === '/' && $num2 == 0) {
    $result = "Error: Division by zero!";
    $display = "{$num1} {$op} {$num2} = {$result}";
} else {
    $res = match($op) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        '/' => round($num1 / $num2, precision: 4),
        default => "Invalid"
    };
    $display = "{$num1} {$op} {$num2} = {$res}";
}


$bg = ($op === '+' || $op === '-') ? "#d0e7ff" : "#fff9c4"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <style>
        body {
            background-color: <?php echo $bg; ?>;
            font-family: Arial, sans-serif;
            padding: 40px;
            direction: ltr;
            text-align: left;
        }
        .result-box {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .equation {
            font-size: 24px;
            font-weight: bold;
            color: #0d47a1;
            margin: 20px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #2196f3;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover { background: #1976d2; }
    </style>
</head>
<body>
    <div class="result-box">
        <h2>✅Result</h2>
        <div class="equation"><?php echo $display; ?></div>
        <a href="index.php"> Back</a>
    </div>
</body>
</html>