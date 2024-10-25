<?php
session_start();

include('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($connection, "SELECT * FROM tb_users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query) == 1){
    header('Location: ../app');
    $user = mysqli_fetch_array($query);
    $_SESSION['name'] = $user['nama']; // $user['nama'] yang terdapat didalam kurung siku adalah nama field pada tabel tb_users
    $_SESSION['level'] = $user['level']; // $user['level'] yang terdapat didalam kurung siku adalah nama field pada tabel tb_users
} 
else if($username == '' || $password == ''){
    header('Location: ../index.php?error=2');
} 
else {
    header('Location: ../index.php?error=1');
}

?>