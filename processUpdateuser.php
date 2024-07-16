<?php
include_once('user.php');
//get the data from the editUser.php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST["email"];
$userId = $_POST['user_id'];

if(empty($firstName) || empty($lastName) || empty($phoneNumber)){
    echo "please complete the fields";
}else{
    //create an object of the classs
    $user = new User();
    $updateUsers = $user->updateUser($firstName,$lastName,$phoneNumber,$userId);
    if($updateUsers == true){
        header("Location: dashboard.php");
        // echo "Updated successfully";
    }else{
        echo "Error trying to register........try again";
       
    }
}




?>