<?php
if(isset($_GET['id'])) {
    include "koneksi.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query="UPDATE user SET
    password = '$password'
    WHERE id='$_GET[id]'";
    $update = mysqli_query($db_connection, $query);

        if ($update){
            echo "<script> alert ('Reset password successfully!!'); </script>";
        } else {
            echo "<script> alert ('Reset password failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("listuser.php");</script>