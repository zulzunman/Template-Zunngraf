<?php
if(isset($_POST['upload'])) {
	include "koneksi.php";
	
	$folder = 'uplod/user/';
	if(move_uploaded_file($_FILES['new_poto']['tmp_name'], $folder . $_FILES['new_poto']['name'])) {
		
		$photo=$_FILES['new_poto']['name'];
		$query="UPDATE user SET poto='$photo' WHERE id='$_POST[id]'";
		$upload=mysqli_query($db_connection,$query);
		
		if($upload) {
			if($_POST['poto'] !== 'default.png') unlink($folder . $_POST['poto']);
			echo "<script>alert('Change Photo Success !');window.location.replace('2a.php');</script>";
		} else {
			echo "<script>alert('Change Photo Failed !');window.location.replace('2a.php?id=$_POST[id]');</script>";
		}
	} else {
		echo "<script>alert('Upload Photo Successed !');window.location.replace('2a.php?id=$_POST[id]');</script>";
	}
}