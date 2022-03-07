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
					<td><a href="listuser.php">USER</a></td>
					<td><a href="2a.php">LIST</a></td>
					<td><a href="list.php">ORDER</a></td>
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
            include "koneksi.php";

            $querypet="SELECT * FROM listzun WHERE id='$_GET[id]'";

            $pet=mysqli_query($db_connection,$querypet);

            $data1=mysqli_fetch_assoc($pet);
            $querymed="SELECT * FROM data AS x, pesan AS y WHERE x.id='$_GET[id]' AND x.idpesan = y.idpesan";
        $medicals=mysqli_query($db_connection,$querymed);
            ?>
            <table id="font">
                <tr>
                    <td>ID/Type</td>
                    <td>: <?=$data1['id']?> / <?=$data1['type']?> </td>
                </tr>
                <tr>
                    <td>Template/Code</td>
                    <td>: <?=$data1['template']?> / <?=$data1['kode']?> </td>
                </tr>
            </table>
            <br>
            <button class="logreg">
            <a href="dataadd.php?id=<?= $_GET['id'];?>">Add Data</a>
            </button>
            <br>
            <br>
            <table border="1" bgcolor="darkorange">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Mail</th>
                    <th>Cost ($)</th>
                </tr>
                <?php
                    if(mysqli_num_rows($medicals) > 0) {
                        $i=1;
                        foreach($medicals as $data2) :
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=date('D, d M Y H:i:s', strtotime($data2['date']))?></td>
                    <td><?=$data2['mail']?></td>
                    <td><?=$data2['cost']?></td>
                </tr>
                <?php
                    endforeach;
                } else {
                ?>
                <tr><td colspan="7" align='center'>No Order !!</td></tr>
                <?php } ?>  
            </table>
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
