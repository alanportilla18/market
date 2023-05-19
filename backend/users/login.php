<?php
    include_once("../config/bd.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        header("location:http://localhost/market/index.html");
    }
    else{
        header("refresh:0; url=http://localhost/market/frontend/users/login.html");
    }
?>