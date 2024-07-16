<?php
    $userId = $_GET['id'];
    include_once('user.php');

    if(empty($userId)){
        echo "Please complete the fields";
    }else{
        $user = new User();
        $users = $user->deleteUser($userId);
        if($users == true){
            echo "Deleted successfully";
            header("Location: dashboard.php");
    
        }else{
            echo "Error trying to delete...Try again";
        }
    
    }
    




?>