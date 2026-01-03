<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Abolfazl ghasemi (Exercise 2)"?></title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        .form { max-width: 350px; margin: 0 auto; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; }
        button { 
            width: 100%; 
            padding: 12px; 
            background: #2196f3; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 16px;
        }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <div class="form">
        <h2 center>Exercise 2:</h2>
        <form method="GET" action="result.php">
            Number 1: <input type="number" name="num1" value="2" required><br>
            Operator:
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br>
            Number 2: <input type="number" name="num2" value="3" required><br>
            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>