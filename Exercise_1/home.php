<center style="color:blue ; box-shadow:1px 20px 50px yellow">
    <h2><b>Welcome to My Site</b></h2>

    <?php

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];
    $nationalcode = $_GET["nationalcode"];
    $address = $_GET["address"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $username = $_GET["username"];
    $password = $_GET["password"];
    $city = $_GET["city"];


    echo "<p><b> first name: </b> $firstname</p>";
    echo "<p><b> last name: </b> $lastname</p>";
    echo "<p><b> age: </b> $age</p>";
    echo "<p><b> national code: </b> $nationalcode</p>";
    echo "<p><b> address: </b> $address</p>";
    echo "<p><b> email: </b> $email</p>";
    echo "<p><b> phone: </b> $phone</p>";
    echo "<p><b> username: </b> $username</p>";
    echo "<p><b> password: </b> $password</p>";
    echo "<p><b> city: </b> $city</p>";


    ?>

</center>


<?php
/*
 http://localhost:8080/tamrin1 
*/
?>