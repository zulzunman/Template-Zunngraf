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
    <button class="logreg"><a href="useradd.php"><b>Add New</b></a></button>
    <table border = "1" bgcolor="darkorange">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Usertype</th>
            <th colspan='3'>Action</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM user";
        $ser = mysqli_query($db_connection, $query);

        $i=1;
        foreach ($ser as $data) :
        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <?= $data["username"]; ?>
            </td>
            <td><?= $data["fullname"]; ?></td>
            <td><?= $data["tipe"]; ?></td>
            <td><button class="logreg"><a href="useredit.php?id=<?=$data['id']?>">Edit User</a></button></td>
            <td><button class="logreg"><a href="userdelete.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete User</a></button></td>
            <td><button class="logreg"><a href="userreset.php?id=<?=$data['id']?>&type=<?= $data["tipe"]; ?>" onclick="return confirm('Are you sure reset password?')">Reset Password</a></button></td>
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