<?php 

include "libs/inc.php";

$action = isset($_GET["ac"]) ? $_GET["ac"] :  "";
$jurusan = new MJurusan(); //Instance dari model jurusan MJurusan


switch($action){
    case "add":
        //Tambah Data
        try {
           $jurusan->insert([
                "nama_jurusan" => $_POST["nama_jurusan"],
                "pagu_jurusan" => $_POST["pagu_jurusan"],
                "status_jurusan" => $_POST["status_jurusan"],
            ]);
            header("location:data_jurusan.php?pesan=Data berhasil di tambah");
        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di tambah !".$err->getMessage());
        }
        break;
    case "edit":
        //Edit Data
        try {
            $jurusan->update(
                $_POST["id_jurusan"],
                [
                    "nama_jurusan" => $_POST["nama_jurusan"],
                    "pagu_jurusan" => $_POST["pagu_jurusan"],
                    "status_jurusan" => $_POST["status_jurusan"],
                ]
            );
            header("location:data_jurusan.php?pesan=Data berhasil di Edit");
        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di Edit !".$err->getMessage());
        }
        break;
    case "delete":
        //Hapus Data
        try {
            $jurusan->Delete($_GET["id"]);
                header("location:data_jurusan.php?pesan=Data berhasil di dihapus");
        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di dihapus !".$err->getMessage());
        }
        break;
    default:
        header("location:404.php");
        break;
}