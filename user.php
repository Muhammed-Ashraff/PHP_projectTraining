<?php
include_once("constant.php");
class User{

    public $dbcon;

	//connecting to Db

	function __construct()
	{
		$this->dbcon = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
		if ($this->dbcon->connect_error) {
			die("Connection Not Successful" . $this->dbcon->connect_error);
		} else {
			// echo "Connection Successful";
		}
	}

    public function register($firstName,$lastName,$email,$phoneNumber,$password)
    {
        $hashedpassword= password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into user SET first_name='$firstName',last_name='$lastName',email='$email',phone_number='$phoneNumber',password='$hashedpassword'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }
    }

    public function login($email,$password)
    {
        $sql = "SELECT * FROM user WHERE email='$email'";
        
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            $row = $dbcon->fetch_assoc();
            $hashedpassword=$row['password'];
            $confirmPassword = password_verify($password,$hashedpassword);
            session_start();
            $_SESSION['firstname'] = $row['first_name'];
            $_SESSION['id'] = $row['id'];
            if($confirmPassword){
                return true;
            }else{
                return false;
            }
        }
    }

    public function getAllUser()
    {
        $sql = "SELECT * FROM user";
        $dbcon = $this->dbcon->query($sql);
        $result = array();
        if($this->dbcon->affected_rows >0)
        {
            while($row = $dbcon->fetch_assoc()){
                $result[] = $row;
                     }
                     return $result;
            }else{
            return $result;
            
        }
    }

    public function getSingleUser($id)
    {
        $sql = "SELECT * FROM user WHERE id='$id'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows ==1){
            $row = $dbcon->fetch_assoc();
            return $row;
        }else{
            return false;
        }
    }
    
    public function updateUser($firstName,$lastName,$phoneNumber,$id)
    {
        $sql = "UPDATE user SET first_name='$firstName',last_name='$lastName',phone_number='$phoneNumber' WHERE id='$id'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id='$id'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }

    }
    
}


?>