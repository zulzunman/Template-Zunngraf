<?php
    if(isset($_GET['id'])){
        include "koneksi.php";
        $query = "DELETE FROM listzun
        WHERE id = '$_GET[id]'";
        $delete = mysqli_query($db_connection, $query);

        if ($delete){
            echo "<script> alert ('Template delete successfully!!'); </script>";
        } else {
            echo "<script> alert ('Template delete failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("2a.php");</script>
    }
?>