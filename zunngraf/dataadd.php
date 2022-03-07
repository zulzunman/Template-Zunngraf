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
                
                // Call connection php mysql
                include "koneksi.php";
                
                // Make query SELECT FROM WHERE
                $querypet="SELECT * FROM listzun WHERE id='$_GET[id]'";
                
                // Run query
                $pet=mysqli_query($db_connection,$querypet);
                
                // Extract data from query result
                $data1=mysqli_fetch_assoc($pet);
                $querydoc="SELECT * FROM pesan";
		        $doctors=mysqli_query($db_connection,$querydoc);
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
            <form method="post" action="databuat.php">
                <table id="font">
                    <tr>
                    <td>Mail</td>
                    <td>
                        <select name="idpesan" required>
                            <option value="">Choose</option>
                            <?php foreach($doctors as $data2) : ?>
                            <option value="<?=$data2['idpesan']?>"><?=$data2['mail']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Cost ($)</td>
                        <td>
                            <input type="number" name="cost" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="save" value="SAVE">
                            <input type="reset" name="reset" value="RESET">
                            <input type="hidden" name="id" value="<?=$data1['id']?>">
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <button class="logreg">
            <a href ="datapesan.php?id=<?=$data1['id']?>">CANCEL</a>
            </button>
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
