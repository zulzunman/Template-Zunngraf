<!DOCTYPE html>
<html>
<head>
	<title>ZUNNGRAF | LIST</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
    <style>
        #posisi{
            font-weight: bold;
            text-align: center;
            color: darkorange;
        }
    </style>
</head>
<body style="background-color:  rgba(8,51,64,255)">
	<nav>
		<a href="index.html"><h2 class="judul">ZUNNGRAF</h2></a>
		<div>
			<table>
				<tr>
					<td><a href="4.html">HOME</a></td>
					<td><a href="2.php">LIST</a></td>
					<td><a href="3.html">ABOUT</a></td>
					<td></td>
					<td></td>
					<td>
                        <a href="login.html">
                            <img id="png" src="https://www.pngall.com/wp-content/uploads/5/Profile-PNG-Clipart.png" alt="">
                        </a>
                    </td>
				</tr>
			</table>
		</div>
	</nav>
	<br>
    <form id="posisi">
    <h2>List Template CV</h2>        
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM listzun WHERE type='cv'";
        $list = mysqli_query($db_connection, $query);
        ?>
    <div>
    <table width="30%">
        <?php $a=0; // Inisiasi data per baris ?>
        <tr>
            <?php foreach ($list as $data) :?>
            <td id="posisi" width="10%">
                <img src="uplod/template/<?php echo $data['template']; ?>" width="50" alt=""><br>
                <?= $data["kode"]; ?><br>
                <button class="logreg">
                <a href="buy.php?id=<?=$data['id']?>">Order</a>
                </button>
            </td>
            <?php
			$a++;                 // Pencatatan data per baris
			if($a==6) {           // Cek data per baris
				echo '</tr><tr>'; // Jika sudah penuh akan pindah ke baris berikutnya (buat tr baru)
				$a=0;             // Pencatatan data per baris kembali ke 0
			}
			?>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>
    <br>
    <h2>List Template Poster</h2>        
    <?php
        include "koneksi.php";
        $query = "SELECT * FROM listzun WHERE type='poster'";
        $list = mysqli_query($db_connection, $query);
        ?>
    <div>
    <table width="30%">
        <?php $a=0; // Inisiasi data per baris ?>
        <tr>
            <?php foreach ($list as $data) :?>
            <td id="posisi" width="10%">
                <img src="uplod/template/<?php echo $data['template']; ?>" width="50" alt=""><br>
                <?= $data["kode"]; ?><br>
                <button class="logreg">
                <a href="buy.php?id=<?=$data['id']?>">Order</a>
                </button>
            </td>
            <?php
			$a++;                 // Pencatatan data per baris
			if($a==6) {           // Cek data per baris
				echo '</tr><tr>'; // Jika sudah penuh akan pindah ke baris berikutnya (buat tr baru)
				$a=0;             // Pencatatan data per baris kembali ke 0
			}
			?>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>
    <br>
    <h2>List Template Banner</h2>        
    <?php
        include "koneksi.php";
        $query = "SELECT * FROM listzun WHERE type='banner'";
        $list = mysqli_query($db_connection, $query);
        ?>
    <div>
    <table width="30%">
        <?php $a=0; // Inisiasi data per baris ?>
        <tr>
            <?php foreach ($list as $data) :?>
            <td id="posisi" width="10%">
                <img src="uplod/template/<?php echo $data['template']; ?>" width="50" alt=""><br>
                <?= $data["kode"]; ?><br>
                <button class="logreg">
                <a href="buy.php?id=<?=$data['id']?>">Order</a>
                </button>
            </td>
            <?php
			$a++;                 // Pencatatan data per baris
			if($a==6) {           // Cek data per baris
				echo '</tr><tr>'; // Jika sudah penuh akan pindah ke baris berikutnya (buat tr baru)
				$a=0;             // Pencatatan data per baris kembali ke 0
			}
			?>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>
    <br>
    <h2>List Template Feed Instagram</h2>        
    <?php
        include "koneksi.php";
        $query = "SELECT * FROM listzun WHERE type='feed'";
        $list = mysqli_query($db_connection, $query);
        ?>
    <div>
    <table width="30%">
        <?php $a=0; // Inisiasi data per baris ?>
        <tr>
            <?php foreach ($list as $data) :?>
            <td id="posisi" width="10%">
                <img src="uplod/template/<?php echo $data['template']; ?>" width="50" alt=""><br>
                <?= $data["kode"]; ?><br>
                <button class="logreg">
                <a href="buy.php?id=<?=$data['id']?>">Order</a>
                </button>
            </td>
            <?php
			$a++;                 // Pencatatan data per baris
			if($a==6) {           // Cek data per baris
				echo '</tr><tr>'; // Jika sudah penuh akan pindah ke baris berikutnya (buat tr baru)
				$a=0;             // Pencatatan data per baris kembali ke 0
			}
			?>
            <?php endforeach; ?>
        </tr>
    </table>
    </div>
    </form>
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