<?php
    if(isset($_GET['id'])){
        include "koneksi.php";
        $query = "DELETE FROM user
        WHERE id = '$_GET[id]'";
        $delete = mysqli_query($db_connection, $query);

        if ($delete){
            echo "<script> alert ('User delete successfully!!'); </script>";
        } else {
            echo "<script> alert ('User delete failed !!'); </script>";
        }
    }
?>

<script>window.location.replace("listuser.php");</script>
    }
?>