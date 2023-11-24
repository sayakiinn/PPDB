<?php

include "libs/inc.php";

$action = isset($_GET["ac"]) ? $_GET["ac"]:
$user = new MUser(); // INstance dari model user MUser

switch($action){
    case "add":
        // Tambah Data
        try {
            $user->Insert([
                "nm_user" => $_POST["nm_user"], 
                "email_user" => $_POST["email_user"], 
                "password_user" => md5($_POST["password_user"]), 
                "level_user" => $_POST["level_user"],
                "status" => $_POST["status"],
            ]);
            header("location:data_user.php?pesan-Data Berhasil Disimpan !");
        } catch(PDOException $err) {
            header("location:form_user.php?pesan-Data Gagal Disimpan !".$err->getMessage());
        }
        break;
    case "edit":
        // Edit Data
        try {
            $user->Update(
                $_POST["id_user"],
                [
                    "nm_user" => $_POST["nm_user"],
                    "email_user" => $_POST["email_user"],
                    "password_user" => $_POST["password_user"]=="" ? $_POST["old_user"]: md5($_POST
                    ["password_user"]),
                    "level_user" => $_POST["level_user"],
                    "status" => $_POST["status"],
                ]
            );
            header("location:data_user.php?pesan-Data Berhasil Update !");
        } catch(PDOException $err){
            header("location:form_user.php?pesan-Data Gagal di Update !".$err->getMessage());
        }
        break;
    case "delete":
        // Hapus Data
        try {
            $user->Delete($_GET["id"]);
            header("location:data_user.php?pesan-Data Berhasil di Hapus !");
        } catch(PDOException $err) {
            header("location:data_user.php?pesan-Data Gagal di Hapus !".$err->getMessage());
        }
        break;
    default:
        header("location:404.php");
        break;
}