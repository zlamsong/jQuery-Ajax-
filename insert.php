<?php
require_once "dbconnection.php";

    if(!$connection){
        die(mysqli_error($connection));
    }

    if (!empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO users(name, email, address, phone)VALUES('$name','$email','$address','$phone')";
        $prepare = mysqli_query($connection, $query);

        if ($prepare==true){
            echo 'success';
        }

    }