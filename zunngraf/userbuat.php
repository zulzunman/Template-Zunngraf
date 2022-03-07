<?php
    if(isset($_POST['save'])){
        include "koneksi.php";
        $password = password_hash($_POST['tipe'], PASSWORD_DEFAULT);
        $query = "INSERT INTO user  (username, password, fullname, tipe) VALUES ('$_POST[username]', '$password', '$_POST[fullname]', '$_POST[tipe]')";

        $create1 = mysqli_query($db_connection, $query);

        if ($create1){
            echo "<script> alert ('User added successfully!!'); </script>";
        } else {
            echo "<script> alert ('User add failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("listuser.php");</script>