<?php

    $name = $email = $gender = $comment = $website = "";

    if(isset($_POST)){

        $name = $_POST['name'];
        $email = $_POST['username'];
        // $pass = $_POST['pass'];
        // $conPass = $_POST['conPass'];
        // $mobile = $_POST['mobile'];

        echo $name . "<br>";
        echo $email . "<br>";
        // echo $pass . "<br>";
        // echo $conPass . "<br>";
        // echo $mobile . "<br>";
      
    }
    


?>


