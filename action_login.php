<?php
session_start(); 
include "libs/inc.php";

$user = new MUser();

$email = $_POST["email"];
$password = $_POST["password"];

// Cek Data User berdasarkan email
$sql = "SELECT * FROM tb_user WHERE email_user = '$email'";
$dtUser = $user->select($sql); // Menampung data hasil eksekusi

// Cek
if(count($dtUser)>0){
    $rsUser = $dtUser[0]; // Menampung data jika user ditemukan
    if(md5($password) ==$rsUser["password_user"]){
        // Berhasil Login
        $_SESSION["login"] = $rsUser;
        header("location:dashboard.php");
    } else {
        // Jika Password Salah
        header("location:index.php?pesan-Maaf password salah !");
    }
} else {
    // Jika User Salah atau Data tidak ditemukan
    header("location:index.php?pesan-Maaf email tidak ditemukan !");
}