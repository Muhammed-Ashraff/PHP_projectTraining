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
			echo "Connection Successful";
		}
	}

    public function register($firstName,$lastName,$email,$phoneNumber)
    {
        $sql = "INSERT into user SET first_name='$firstName',last_name='$lastName',email='$email',phone_number='$phoneNumber'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM user WHERE id='$id'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }
    }

    public function updateUser($firstName,$lastName,$email,$phoneNumber,$id)
    {
        $sql = "UPDATE user SET first_name='$firstName',last_name='$lastName',email='$email',phone_number='$phoneNumber',id='$id'";
        $dbcon = $this->dbcon->query($sql);
        if($this->dbcon->affected_rows == 1){
            return true;
        }else{
            return false;
        }
    }

}


?>