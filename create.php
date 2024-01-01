<?php
include ('connection.php');



$connection = new  Connection();



$connection->selectDatabase('crudPoo6');
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";
if(isset($_POST["submit"])){

    $emailValue = $_POST["email"];
    $lnameValue = $_POST["lastname"];
    $fnameValue = $_POST["firstname"];
    $passwordValue = $_POST["password"];
    $idCityValue = $_POST["cities"];

    if(empty($emailValue) || empty($fnameValue) || empty($lnameValue)){

    $errorMesage = "all fields must be filed out!":

}else if(strlen($passwordValue < 8)){
    $errorMesage = "password must contains at least 8 char":
}else if(preg_match("/[A-Z]+/", $passwordValue)==0){
    $errorMesage = "password must contains at least one capital":
}else{





include('client.php');


$client = new Client($fnameValue,$lnameValue,$emailValue,$passwordValue,$idCityValue);


$client->insertClient('Clients',$connection->conn);


$successMesage = Client::$successMsg;


$errorMesage = Client::$errorMsg;

$emailValue = "";
$lnameValue = "";
$fnameValue = "";

}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale">
        <title>CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boots">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/"></script> 
    </head>
    <body>
        <div class="container my-5">

        <h2>SIGN UP</h2>

        <?php

        if(!empty($errorMesage)){
            echo "<div class='alert alert-warning alert-dismissibke fade show
            <strong>$errorMesage</strong>
            <button tyoe='button' class='btn-close' data-bs)dismiss='alert'
            </button>
            </div>";
        }
        ?>

        <br>
        <form method="post">
            <div class="row mb-3">
                <label class="col-form-label col-sm-1" for="fname">First Name:</label>
                <div class="col-sm-6">
                    <input value="<?php echo $fnameValue ?>" class="form-control" type="text" id="fname" name="firstName">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-form-label col-sm-1" for="lname">Last Name:</label>
                <div class="col-sm-6">
                    <input value="<?php echo $lnameValue ?>" class="form-control" type="text" id="lname" name="lastName">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-form-label col-sm-1" for="email">Email:</label>
                <div class="col-sm-6">
                    <input value="<?php echo $emailValue ?>" class="form-control" type="text" id="email" name="Email">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-form-label col-sm-1" for="cities">Cities:</label>
                <div class="col-sm-6">
                    <select name="cities" class="form-select">
                        <option selected>Select your city</option>
                        <?php
                        include('city.php');
                        $cities = City::selectAllcities('Cities',$connection->conn);
                        foreach($cities as $city){
                            echo "<option value='$city[id]'>$city[name]</option>";


                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-form-label col-sm-1" for="password">Email:</label>
                <div class="col-sm-6">
                    <input class="form-control" type="password" id="password" name="Password">
                </div>
            </div>

            <?php
            if(!empty($successMesage)){
                echo "<div class='alert alert-success alert-dismissible fade show'
                role='alert'>
                <strong>$successMesage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                </div>";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-1 col-sm-3 d-grid">
                    <button name="submit" type="submit" class=" btn btn-primary">Update</button>
                </div>
                <div class="offset-sm-1 col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="read.php">Cancel</a>
                </div>
            </div>

        </form>
        </div>
    </body>