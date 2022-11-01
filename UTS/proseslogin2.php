<?php
if (isset($_POST['GetStarted'])){
$user = $_POST['username'];
$pass = $_POST["password"];
if($user == "Veni" && $pass =="123") {
    header('location:input2.php');
//echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>