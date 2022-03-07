<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first !!');window.location.replace('login.html');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ZUNNGRAF | LIST</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
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
    <button class="logreg"><a href="2add.php"><b>Add New</b></a></button>
    <table border = "1" bgcolor="darkorange">
        <tr>
            <th>No</th>
            <th>Type</th>
            <th>Template</th>
            <th>Code</th>
            <th colspan='3'>Action</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM listzun";
        $list = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($list as $data) :
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td>
                <button>
                    <a href="datapesan.php?id=<?=$data['id']?>"><?php echo $data["type"]; ?></a>
                </button>
            </td>
            <td align="center">
                <img src="uplod/template/<?php echo $data['template']; ?>" width="50" alt="">
            </td>
            <td><?= $data["kode"]; ?></td>
            <td>
                <button class="logreg">
                <a href="2edit.php?id=<?=$data['id']?>">Edit</a>
                </button>
            </td>
            <td>
                <button class="logreg">
                <a href="2delete.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
                </button>
            </td>
            <td>
                <button class="logreg">
                <a href="templatepoto.php?id=<?=$data['id']?>">Change Template</a>
                </button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
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