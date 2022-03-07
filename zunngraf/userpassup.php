<?php
session_start();
if(isset($_POST['change'])){
        include "koneksi.php";
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "UPDATE user SET 
        password = '$password' WHERE id = '$_SESSION[id]'";

        $update = mysqli_query($db_connection, $query);

        if ($update){
            echo "<script> alert ('Change password successfully!!'); </script>";
        } else {
            echo "<script> alert ('Change password failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("2a.php");</script>