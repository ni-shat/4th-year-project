<?php

$nameForGurdian = $nameForTutor = $mobile = $email = $pass = $conPass = "";

if (isset($_POST)) {


    // validation
    // gurdians name validation
    echo $_POST['nameForGurdian'];
    // echo $_POST['nameForTutor'];

    $nameForGurdian = $_POST['nameForGurdian'];
    $nameForTutor = $_POST['nameForTutor'];

    if (is_numeric($nameForGurdian) == 1) {

        echo "invalid name";
        return "invalid name";
    } 
    
    // tutors name validation
    if (is_numeric($_POST['nameForTutor']) == 1 && $_POST['nameForGurdian'] == '') {

        echo "invalid name2";
        return "invalid name2";

    } else {       
        $nameForTutor = $_POST['nameForTutor'];
    }

    // email validation
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        echo "wrong email";
        return "wrong email";
    }

    
    // pass validation
    // $uppercase = preg_match('@[A-Z]@', $_POST['pass']);
    // $lowercase = preg_match('@[a-z]@', $_POST['pass']);
    // $number = preg_match('@[0-9]@', $_POST['pass']);

    $reg_pass = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

    if($_POST['pass'] != $_POST['conPass']){
        echo "pass doesn't match";
       return "pass doesn't match";
    }

    else if(preg_match($reg_pass, $_POST['pass']) != 1) {
        echo 'Invalid password';
        return 'Invalid password';
    }
     else {
        $pass = $_POST['pass'];
    }

    // mobile validation
    $reg_mobile = "/^([\+]?88)?(01)[3-9]{1}[0-9]{8}$/";

    if (preg_match($reg_mobile, $_POST['mobile']) == 1) {
        //matched
        $mobile = $_POST['mobile'];
    } else {
        echo "invalid mobile";
        return "invalid mobile";
    }
    // end validation


    // send data to db
    $db = mysqli_connect('localhost', 'root', '', 'tutor_finding_system');

    // check whether user is selected as gurdian
    if ($nameForTutor == "" || $nameForTutor == "1") { //gurdian is selected as user
        echo 'gurdian';
        $sql = "INSERT INTO `gurdian_auth_info` (name, mobile, email, pass)
                VALUES ('$nameForGurdian','$mobile','$email', '$pass')";

        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
    else if($nameForGurdian == ""){ // tutor is selected as user
        echo 'tutor';
        $sql = "INSERT INTO `tutors_auth_info` (name, mobile, email, pass)
                VALUES ('$nameForTutor','$mobile','$email', '$pass')";

        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }





    echo 'success';
    return 'success';

}



?>