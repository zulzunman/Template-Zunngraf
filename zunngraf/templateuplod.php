<?php
if(isset($_POST['upload'])) {
    include "koneksi.php";

    $folder = 'uplod/template/';
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$folder . $_FILES['photo']['name'])) {

        $photo=$_FILES['photo']['name'];

        $query="UPDATE listzun SET template='$photo' WHERE id='$_POST[id]'";
		
		$update = mysqli_query($db_connection, $query);
        if($update) {
            if($_POST['template'] !== 'default.png') unlink($folder . $_POST['template']);
                echo "<script>alert('Change photo successed !');window.location.replace('2a.php');</script>";
            } else {
                echo "<script>alert('Change photo failed !');window.location.replace('2edit.php?id=$_POST[id]');</script>";
        }
    }
}
?>