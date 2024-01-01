<?php

class City{

    public $id;
    public $name;

//constructeur //antification
    public static function selectAllcities($tableName,$conn){
        $sql = "SELECT id, name from $tableName";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $data=[];
            while($row = mysqli_fetch_assoc($result)) {

                $data[]=$row;
            }
            return $data;
        }
    }

    public static function selectCityById($tableName,$conn,$id){
        $sql = "SELECT name FROM $tableName WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result > 0)) {

            $row = mysqli_fetch_assoc($result);

        }
        return $row;
    }
}


?>