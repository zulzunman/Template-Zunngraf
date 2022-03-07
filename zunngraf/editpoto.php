<?php
session_start();

include "koneksi.php";
		
    //query select
$query = "SELECT * FROM user WHERE id= '$_SESSION[id]'";
    
    //run query
$user=mysqli_query($db_connection,$query);
    
    //extract data
$data=mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ZUNNGRAF | LIST</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
    <style>
        #font{
            color: darkorange;
        }
    </style>
</head>
<body style="background-color:  rgba(8,51,64,255)">
	<nav>
		<h2 class="judul">ZUNNGRAF</h2>
		<div>
			<table>
				<tr>
                    <td><a href="listuser.php">USER</a></td>
					<td><a href="report.php">DATA</a></td>
                    <td><a href="2a.php">LIST</a></td>
					<td><a href="list.php">ORDER</a></td>
					<td></td>
					<td></td>
                    <td><a href="userpass.php"><img id="png" src="https://www.freeiconspng.com/thumbs/forgot-password-icon/forgot-password-icon-0.png" alt=""></a></td>
					<td>
                        <a href="logout.php">
                            <img id="png" src="https://e7.pngegg.com/pngimages/655/512/png-clipart-computer-icons-log-out-miscellaneous-rectangle-thumbnail.png" alt="">
                        </a>
                    </td>
				</tr>
			</table>
		</div>
	</nav>
	<br>
	<br>
    <h3 id="font">User Change Photo</h3>
	
    <form method="POST" action="potouplod.php" enctype="multipart/form-data">
    <table id="font">
        <tr>
            <td></td>
            <td><img src="uplod/user/<?= $data['poto'] ?>" width="30%"></td>
        </tr>
        <tr>
            <td>new photo</td>
            <td>: <input type="file" name="new_poto" required></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="upload" value="upload">
                <input type="hidden" name="poto" value="<?= $data['poto'] ?>" />
                <input type="hidden" name="id" value="<?= $data['id'] ?>" />
            </td>
        </tr>
    </table>
    </form>

    <br>
	<br>
	<br>
	<div class="bawah">
		<h4>@Faizulzunn</h4>
		<p id="demo" class="warna"></p>
		<div>
			<a href="https://www.youtube.com/channel/UCuotFYjVMnvaq6TJml4XdWQ"><img src="https://icon-library.com/images/youtube-png-icon/youtube-png-icon-0.jpg"></a>
			<a href="https://www.instagram.com/faizul_f.n/"><img src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-logo-abundant-instagram-logo-simple-icon-1.png"></a>
		</div>
	</div>
	<script src="ubah.js"></script>
</body>
</html>