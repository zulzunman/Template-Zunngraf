<?php
    if(isset($_POST['save'])){
        include "koneksi.php";
        $query = "INSERT INTO listzun (type, kode) VALUES ('$_POST[type]', '$_POST[kode]')";
        $create = mysqli_query($db_connection, $query);

        if ($create){
            echo "<script> alert ('Template added successfully!!'); </script>";
        } else {
            echo "<script> alert ('Template add failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("2a.php");</script>
    }
?>