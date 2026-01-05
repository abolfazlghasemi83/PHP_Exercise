<?php
//Multiplication-Table AG
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Abolfazl ghasemi </title>
    <h1> <mark><i>tamrin 4</i></mark>  Multiplication-Table</h1>

    <style>
        * {
            text-align: center;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 99vh;
            background-color: #e2f0fc;
        }

        table {
            background-color: #ffffff;
            border: 2px solid #c4bcab;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-collapse: collapse;
        }


        td {
            font-size: 20px;
            padding: 14px;
            border: 1px solid #c4bcab;
        }
    </style>

</head>

<body>
    <table>
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";

            for ($j = 1; $j <= 10; $j++) {

                $result = $i * $j;
                $style = "";


                if ($i == $j) {
                    $style .= "border: 8px solid red; color: blue;";
                }


                if ($i + $j == 11) {

                    $style .= "background-color: yellow; color: blue;";
                }


                echo "<td style='" . $style . "'>" . $result . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>