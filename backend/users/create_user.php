<?php
    include_once("../config/bd.php");
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

    if ($mysqli->query($sql) === true) {
        header("Location: http://localhost/market/frontend/users/login.html");
    }
    else{
        echo"Error: ".$mysqli->error."<br>".$sql;
        header("refresh:0; url=http://localhost/market/backend/users/create_user.php");
    }
?>