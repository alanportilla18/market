<?php
    include_once("../config/bd.php");
    $now = date("Y-m-d");
    $id = $_GET['id'];
    $sql = "UPDATE users SET deleted_at = '$now' WHERE id = '$id'";
    $result = $mysqli->query($sql);
    if($result) {
        if($mysqli->affected_rows) {
            header("Location: http://localhost/market/backend/users/list_users.php");
        } else {
            echo "User does not exist";
        }
    } else {
        echo"Error: ".$mysqli->error."<br>".$sql;
    }
?>