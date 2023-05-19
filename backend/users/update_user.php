<?php
    include_once("../config/bd.php");
    $userId =$_POST['uId'];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql ="UPDATE user SET
    first_name ='$first_name'
    last_name ='$last_name'
    email ='$email'
    password ='$password'
    WHERE id='userId'";
    if($conn->query($sql)===TRUE){
        echo "<script>alert('user has been updated') </script>";
        header("refresh:0;url=http://127.0.0.1/market/backend/users/list_users.php);")
    }
