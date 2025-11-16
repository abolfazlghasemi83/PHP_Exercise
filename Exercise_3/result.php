<?php
$num1 = (float) $_GET['num1'];
$num2 = (float) $_GET['num2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            direction: ltr;
        }
        .result {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: 0 auto;
            text-align: left; 
        }
        .op { 
            font-size: 18px; 
            margin: 10px 0;
            padding: 8px;
            background: white;
        }
        a { display: inline-block; margin-top: 20px; color: #1976d2; text-decoration: none; }
    </style>
</head>
<body>
    <div class="result">
        <h2>Results:</h2>

        <?php
        echo "<div class='op'>{$num1} + {$num2} = " . ($num1 + $num2) . "</div>";
        echo "<div class='op'>{$num1} - {$num2} = " . ($num1 - $num2) . "</div>";
        echo "<div class='op'>{$num1} * {$num2} = " . ($num1 * $num2) . "</div>";

        if ($num2 != 0) {
            echo "<div class='op'>{$num1} / {$num2} = " . round($num1 / $num2, 4) . "</div>";
        } else {
            echo "<div class='op'>{$num1} / {$num2} = Error: Division by zero!</div>";
        }
        ?>

        <a href="index.php">&larr; Back</a>
    </div>
</body>
</html>