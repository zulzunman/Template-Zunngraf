<?php
session_start();
session_destroy();
echo "<script> alert ('Logout success !'); window.location.replace ('login.html');</script>";
?>