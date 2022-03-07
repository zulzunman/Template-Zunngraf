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
	<br>
    <div>
        <img class="lengkap" src="https://instingmarketing.com/wp-content/uploads/2021/06/Icon.png" alt="">
            <?php
                
                // Call connection php mysql
                include "koneksi.php";
                
                // Make query SELECT FROM WHERE
                $querypet="SELECT * FROM listzun WHERE id='$_GET[id]'";
                
                // Run query
                $pet=mysqli_query($db_connection,$querypet);
                
                // Extract data from query result
                $data1=mysqli_fetch_assoc($pet);
                ?>
            <form style="color: azure;" method="post" action="buydb.php">
            <div>
                <table class="batas">
                    <h2>Data Pemesan</h2>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="mail">
                        </td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <input type="text" name="tipe" value="<?=$data1['type']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>
                            <input type="text" name="kode" value="<?=$data1['kode']?>">
                        </td>
                    </tr>
                    <tr> 
                        <td>Ukuran Banner</td>
                        <td><input type="text" name="ukuran_banner" ></td>
                    </tr>
                    <tr> 
                        <td>Jumlah</td>
                        <td><input type="number" name="jumlah" required></td>
                    </tr>
                    
                </table>
                <div>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id" value="<?=$data1['id']?>">
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
