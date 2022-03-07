<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first !!');window.location.replace('login.html');</script>";
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
    <div>
        <img class="lengkap" src="https://instingmarketing.com/wp-content/uploads/2021/06/Icon.png" alt="">
        <form style="color: azure;" method="post" action="2buat.php">
            <div>
                <table class="batas">
                    <h2>Tambahkan Template</h2>
                    <tr> 
                        <td>Template</td>
                        <td>
                            <select name="type" id="">
                                <option value="" required>Choose</option>
                                <option value="cv">CV</option>
                                <option value="poster">Poster</option>
                                <option value="banner">Banner</option>
                                <option value="feed">Feed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Code</td>
                        <td><input type="text" id="mail" name="kode" required></td>
                    </tr>
                </table>
                <div>
                    <input type="submit" class="tekan" onclick="check()" name="save" value="SAVE">
                    <input type="reset" class="tekan" name="reset" value="RESET">
                </div>
            </div>
        </form>
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
