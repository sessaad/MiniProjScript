<?php

class Client{

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $reg_date;

    public $idCity;

    public static $errorMsg = "";

    public static $successMsg = "";


    public function _construct($firstname,$lastname,$email,$password,$idCity){


        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        $this->idCity = $idCity;

    }

    public function insertClient($tableName,$conn){
       
        
         $sql = "INSERT INTO $tableName (firstname, lastname, email, password, idCity)
         VALUES ('$this->firstname', '$this->lastname', '$this->email', '$this->password','$this->idCity')";
         if (mysqli_query($conn, $sql)) {
            self::$successMessage = "New record created successfully";
            
         } else {
            self::$errorMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
    }

    public static function selectAllClients($tableName,$conn){


        $sql = "SELECT id, firstname, lastname, email, idCity from $tableName";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $data=[];
            while($row = mysqli_fetch_assoc($result)) {

                $data[]=$row;
            }
            return $data;
        }

    }

    static function selectClientById($tableName,$conn,$id){


        $sql = "SELECT firstname, lastname, email FROM $tableName WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result > 0)) {

            $row = mysqli_fetch_assoc($result);

        }
        return $row;

    }

    static function updateClient($client,$tableName,$conn,$id){


        $sql = "UPDATE $tableName SET lastname='$client->lastname',firstname='$client->firstname',email='$client->email' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            self::$successMessage = "New record updated successfully";
            header("Location:read.php");
        } else {
            self::$errorMessage = "Error updating record: " . mysqli_error($conn);
        }
    }

    static function deleteClient($tableName,$conn,$id){


        $sql = "DELETE FROM $tableName WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            self::$successMessage = "Record deleted successfully";
            header("Location:read.php");
        } else {
            self::$errorMessage = "Error deleting record: " . mysqli_error($conn);
        }
    }

    public static function selectClientByCityId($tableName,$conn,$idCity){
        $sql = "SELECT id, firstname, lastname, email from $tableName WHERE idCity='$idCity'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $data=[];
            while($row = mysqli_fetch_assoc($result)) {

                $data[]=$row;
            }
            return $data;
        }
    }
    //isset submit anchanger liste client b liste clientbycityid
}