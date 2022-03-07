<?php
session_start();
if(isset($_POST['login'])) {
    include "koneksi.php";

    $query="SELECT * FROM user WHERE username='$_POST[username]'";

    $login=mysqli_query($db_connection,$query);

    if(mysqli_num_rows($login) > 0) {
        $user=mysqli_fetch_assoc($login);
        if(password_verify($_POST['password'], $user['password'])) {
            $_SESSION['login']=TRUE;
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['password']=$user['password'];
            $_SESSION['fullname']=$user['fullname'];
            $_SESSION['tipe']=$user['tipe'];

            echo "<script>alert('Login success !');window.location.replace('2a.php');</script>";
        } else {
            echo "<script>alert('Login failed, wrong password !');</script>";
        }
    } else {
        echo "<script>alert('Login failed, usernot found !');window.location.replace('login.html');</script>";
    }
}