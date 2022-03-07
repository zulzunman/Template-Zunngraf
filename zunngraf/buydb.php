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
		<a href="index.html"><h2 class="judul">ZUNNGRAF</h2></a>
		<div>
			<table>
				<tr>
					<td></td>
					<td><a href="2a.php">LIST</a></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
                        <a href="login.html">
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

        <?php
            if(isset($_POST['save'])){
                include "koneksi.php";
                $query = "INSERT INTO pesan SET 
                nama            = '$_POST[nama]',
                mail            = '$_POST[mail]',
                tipe            = '$_POST[tipe]',
                kode            = '$_POST[kode]',
                ukuran_banner   = '$_POST[ukuran_banner]',
                jumlah          = '$_POST[jumlah]'";

                $create = mysqli_query($db_connection, $query);

                if ($create){
                    echo "<script> alert ('Pemesan added successfully!!'); </script>";
                } else {
                    echo "<script> alert ('Pemesan add failed !!'); </script>";
                }
            }
        ?>

        <script>window.location.replace("2.php");</script>

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
