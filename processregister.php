<?php 
    include_once("user.php");
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST["password"];

    if(empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber) || empty($password)){
        echo "please complete the fields";
    }else{
        //create an object of the classs
        $user = new User();
        $reg = $user->register($firstName,$lastName,$email,$phoneNumber,$password);
        if($reg == true){
            // echo "Registration successful";
            //redirect the user to different page
            header("Location: loginform.php");
        }else{
            echo "Error trying to register........try again";
        }
    }


?>