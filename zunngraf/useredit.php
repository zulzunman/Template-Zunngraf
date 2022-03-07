<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first !!');window.location.replace('login.html');</script>";
}
if($_SESSION['tipe'] != 'Admin') {
    echo "<script>alert('Access Forbidden !!');window.location.replace('2a.php');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ZUNNGRAF | FORM PEMESANAN</title>
    <link rel="stylesheet" href="edit.css">
    <style>
        .lengkap{
            float: right;
            width: 300px;
            margin-right: 300px;
        }
        .batas{
            padding: 3px;
        }
        .tekan{
            padding: 3px;
            width: 50px;
        }
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
					<td><a href="2a.php">LIST</a></td>
					<td><a href="list.php">ORDER</a></td>
					<td></td>
					<td></td>
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
    <?php
        include "koneksi.php";

        $query="SELECT * FROM user WHERE id='$_GET[id]'";

        $ser=mysqli_query($db_connection,$query);

        $data=mysqli_fetch_assoc($ser);
    ?>
    <div>
        <img class="lengkap" src="https://instingmarketing.com/wp-content/uploads/2021/06/Icon.png" alt="">
            <form method="post" action="userupdate.php" id="font">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="<?=$data['username']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Fullname</td>
                    <td>
                        <input type="text" name="fullname" value="<?=$data['fullname']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Usertype</td>
                    <td>
                        <input type="radio" name="tipe" value="Admin" <?=($data['tipe']=='Admin')?'checked':'';?> required>Admin
                        <input type="radio" name="tipe" value="Guest" <?=($data['tipe']=='Guest')?'checked':'';?> required>Guest
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" value="SAVE">
                        <input type="reset" name="reset" value="RESET">
                        <input type="hidden" name="id" value="<?=$data['id']?>">
                    </td>
                </tr>
            </table>
        </form>
        <div>
            <button class="logreg"><a href="listuser.php">Kembali</a></button>
        </div>
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
