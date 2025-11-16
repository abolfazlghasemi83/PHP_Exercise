<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Abolfazl ghasemi (Exercise 1)"?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        .form { max-width: 300px; margin: 0 auto; }
        input { width: 100%; padding: 8px; margin: 5px 0; }
        button { width: 100%; padding: 10px; background: #4CAF50; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form">
        <center><h2>Exercise 1:</h2></center>
        <form method="Get" action="result.php">
            First Number: <input type="number" name="num1" value="2" required><br>
            Second Number: <input type="number" name="num2" value="3" required><br>
            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>