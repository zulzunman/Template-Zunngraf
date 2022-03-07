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
    <?php
    $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
    $year = date('Y');
    ?>
    <form>
        <p id="font">Select
            <select name="month" required>
                <option value="">Month</option>
                <?php for($m=1;$m<=12;$m++) {?>
                <option value="<?=$m?>"><?=$months[$m-1]?></option>
                <?php } ?>
            </select>
            <select name="year" required>
                <option value="">Year</option>
                <?php for($y=0;$y<=2;$y++) {?>
                <option value="<?=$year-$y?>"><?=$year-$y?></option>
                <?php } ?>
            </select>
            <input type="submit" value="View report">
        </p>
    </form>
    <?php 
    if(isset($_GET['year'])) {
        include 'koneksi.php';
        //$query="SELECT * FROM data";
        $query="SELECT m.date, p.idpesan, p.nama, p.kode, m.cost FROM data AS m, pesan As p WHERE m.idpesan=p.idpesan AND MONTH(m.date)='$_GET[month]' AND YEAR (m.date)='$_GET[year]'";
        $report=mysqli_query($db_connection,$query);

    ?>
    <h4 id="font">Report periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
    <table border="1" bgcolor="darkorange">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Order</th>
            <th>Kode</th>
            <th>Pay ($)</th>
        </tr>
        <?php
        if(mysqli_num_rows($report) > 0) {
            $i=1; $total=0;
            foreach($report as $data) :
                $total=$total+$data['cost'];
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$data['date']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['kode']?></td>
            <td align="right"><?=$data['cost']?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="7" align="right">Total : $ <?=$total?></th>
        </tr>
        <?php } else {?>
        <tr>
            <td colspan="7" align="right">No record !</td>
        </tr>
        <?php }?>
    </table>
    <br>
    <button onclick="window.print()">Print This Page</button>
    <?php }?>


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
