<?php

    $name = $mobile = $email = $pass = $conPass = "";

    if(isset($_POST)){

        $nameForGurdian = $_POST['nameForGurdian'];
        $nameForTutor = $_POST['nameForTutor'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];

        // echo $nameForTutor . "<br>";
        // echo $nameForGurdian . "<br>";
        // echo $email . "<br>";
        // echo $pass . "<br>";
        // echo $conPass . "<br>";


        // validation
        if ($_POST["nameForGurdian"] !== '' && is_numeric($nameForGurdian) != 1) { 
            // return 'in loop';
            // $nameForGurdian = $_POST['nameForGurdian'];
        } else {  
            $errMsg = "error"; 
            //echo 'error'; 
            return $errMsg;
            // return $errMsg;  
        }  
        // if ($_POST["nameForTutor"] !== '1' && $_POST["nameForTutor"] !== '' && is_numeric($nameForGurdian) != 1) { 
        //     echo 'ni';
        //     $nameForTutor = $_POST['nameForTutor'];
        // } else {  
        //     $errMsg = "error!"; 
        //     echo $errMsg; 
        //     return $errMsg;  
        // }  

        echo 'success';
        return 'success';
      
    }
    


?>





