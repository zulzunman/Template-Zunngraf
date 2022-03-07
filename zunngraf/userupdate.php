<?php
if(isset($_POST['save'])){
        include "koneksi.php";
        $query = "UPDATE user SET 
        username = '$_POST[username]',
        password = '$_POST[password]',
        fullname = '$_POST[fullname]',
        tipe = '$_POST[tipe]'
        WHERE id = '$_POST[id]';";

        $update = mysqli_query($db_connection, $query);

        if ($update){
            echo "<script> alert ('User update successfully!!'); </script>";
        } else {
            echo "<script> alert ('User update failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("listuser.php");</script>