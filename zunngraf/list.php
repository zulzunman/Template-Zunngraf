<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>
    alert('Please login first !'); 
    window.location.replace('login.html');
    </script>";
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
        #judul{
            color: rgba(255,91,10,255);
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
                    <td>
                    <?php
                        include "koneksi.php";
                        $query = "SELECT * FROM user WHERE id= '$_SESSION[id]'";
                        $user = mysqli_query($db_connection, $query); 
                        $data = mysqli_fetch_assoc($user);
                    ?>
                    <a href="editpoto.php"><img src="uplod/user/<?= $data['poto']; ?>" id="png"></a>
                    </td>
				</tr>
			</table>
		</div>
	</nav>
	<br>
	<br>
    <h1 id="judul">List Order</h1>
    <table bgcolor="darkorange" border = "1">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Email</th>
            <th>Template</th>
            <th>Kode</th>
            <th>Ukuran Banner</th>
            <th>Jumlah</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM pesan";
        $zun = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($zun as $data) :
        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <?= $data["nama"]; ?>
            </td>
            <td>
            <?= $data["mail"]; ?>
            </td>
            <td><?= $data["tipe"]; ?></td>
            <td>
            <?= $data["kode"]; ?>
            </td>
            <td><?= $data["ukuran_banner"]; ?></td>
            <td><?= $data["jumlah"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
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