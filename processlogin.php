<?php 
    
    $email = $_POST['email'];
    $password = $_POST["password"];

    if(empty($email) || empty($password))
    {
        echo "please complete the fields";
    }else{
        //create an object of the class
        include_once("user.php");
        $user = new User();
        $result = $user->login($email,$password);
        if($result == true){
            // echo "Login successfully";
            //redirect the user to different page
            header("Location: dashboard.php");
        }else{
            echo "Error while trying to login.... pls try again";
        }
    }


?>