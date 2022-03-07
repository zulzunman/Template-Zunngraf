<?php
	if(isset($_POST['save']))	{ 
		include "koneksi.php";
		$query = "UPDATE listzun SET
				type = '$_POST[type]',
				kode = '$_POST[kode]'
				WHERE id = '$_POST[id]';
				";
		$update = mysqli_query($db_connection, $query);
		if ($update){
			echo "<script> alert ('Update successfully!!'); </script>";
		} else {
			echo "<script> alert ('Update failed !!'); </script>";
		}
	}
?>
<script>window.location.replace("2a.php");</script>