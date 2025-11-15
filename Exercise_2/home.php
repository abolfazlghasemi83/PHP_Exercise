<center style="color:blue ; box-shadow:100px 200px 400px yellow">

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


    $color1 = $_GET["color1"];
    $color2 = $_GET["color2"];
    $color3 = $_GET["color3"];
    $color4 = $_GET["color4"];
    $color5 = $_GET["color5"];
    $color6 = $_GET["color6"];
    $color7 = $_GET["color7"];
    $color8 = $_GET["color8"];
    $color9 = $_GET["color9"];
    $color10 = $_GET["color10"];

    echo "<p><b> first name: </b> <span style='background-color:$color1; padding:3px 10px; border-radius:6px;'>$firstname</span></p>";
    echo "<p><b> last name: </b> <span style='background-color:$color2; padding:3px 10px; border-radius:6px;'>$lastname</span></p>";
    echo "<p><b> age: </b> <span style='background-color:$color3; padding:3px 10px; border-radius:6px;'>$age</span></p>";
    echo "<p><b> national code: </b> <span style='background-color:$color4; padding:3px 10px; border-radius:6px;'>$nationalcode</span></p>";
    echo "<p><b> address: </b> <span style='background-color:$color5; padding:3px 10px; border-radius:6px;'>$address</span></p>";
    echo "<p><b> email: </b> <span style='background-color:$color6; padding:3px 10px; border-radius:6px;'>$email</span></p>";
    echo "<p><b> phone: </b> <span style='background-color:$color7; padding:3px 10px; border-radius:6px;'>$phone</span></p>";
    echo "<p><b> username: </b> <span style='background-color:$color8; padding:3px 10px; border-radius:6px;'>$username</span></p>";
    echo "<p><b> password: </b> <span style='background-color:$color9; padding:3px 10px; border-radius:6px;'>$password</span></p>";
    echo "<p><b> city: </b> <span style='background-color:$color10; padding:3px 10px; border-radius:6px;'>$city</span></p>";
    ?>

</center>


<?php
/*
 http://localhost:8080/tamrin2
*/
?>