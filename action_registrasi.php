<?php

include "libs/inc.php";

$user = new MUser();

try {

    // SImpan ke tb_User
    $user->Insert([
    "nm_user" => $_POST["nama"], 
    "email_user" => $_POST["email"], 
    "password_user" => md5($_POST["password"]), 
    "level_user" => "User", 
    "status" => 1 
    ]);

    // Redirect ke Login 
    header("location:index.php");

} catch(PDOException $err){
    // Redirect ke Form
    header("location: registrasi.php?pesan-Registrasi Gagal !");

}