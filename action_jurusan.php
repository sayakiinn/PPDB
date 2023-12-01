<?php 

include "libs/inc.php";

$action = isset($_GET["ac"]) ? $_GET["ac"] :  "";
$user = new Mjurusan();


switch($action){
    case "add":
        try {
           $result =  $user->insert( [
                    "no_daftar" => $_POST["no_daftar"],
                    "nisn" => $_POST["nisn"],
                    "tgl_daftar" => $_POST["tgl_daftar"],
                    "nm_daftar" => $_POST["nm_daftar"],
                    "tmp_lahir_daftar" => $_POST["tmp_lahir_daftar"],
                    "tgl_lahir_daftar" => $_POST["tgl_lahir_daftar"],
                    "alamat_daftar" => $_POST["alamat_daftar"],
                    "jk_daftar" => $_POST["jk_daftar"],
                    "agama_daftar" => $_POST["agama_daftar"],
                    "telp_daftar" => $_POST["telp_daftar"],
                    "asal_sekolah_daftar" => $_POST["asal_sekolah_daftar"],
                    "nilai_daftar" => $_POST["nilai_daftar"],
                    "nm_ayah_daftar" => $_POST["nm_ayah_daftar"],
                    "nm_ibu_daftar" => $_POST["nm_ibu_daftar"],
                    "syarat_daftar" => $_POST["syarat_daftar"],
                    "verified_daftar" => $_POST["verified_daftar"],
                    "status_daftar" => $_POST["status_daftar"],
            ]);
            
            header("location:data_jurusan.php?pesan=Data berhasil di tambah");
        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di tambah !".$err->getMessage());
        }
        break;
        case "edit":
        try {
            $user->update(
                $_POST["id_daftar"],
                [
                    "no_daftar" => $_POST["no_daftar"],
                    "nisn" => $_POST["nisn"],
                    "tanggal_daftar" => $_POST["tgl_daftar"],
                    "nm_daftar" => $_POST["nm_daftar"],
                    "tmp_lahir_daftar" => $_POST["tmp_lahir_daftar"],
                    "tgl_lahir_daftar" => $_POST["tgl_lahir_daftar"],
                    "alamat_daftar" => $_POST["alamat_daftar"],
                    "jk_daftar" => $_POST["jk_daftar"],
                    "agama_daftar" => $_POST["agama_daftar"],
                    "telp_daftar" => $_POST["telp_daftar"],
                    "asal_sekolah_daftar" => $_POST["asal_sekolah_daftar"],
                    "nilai_daftar" => $_POST["nilai_daftar"],
                    "nm_ayah_daftar" => $_POST["nm_ayah_daftar"],
                    "nm_ibu_daftar" => $_POST["nm_ibu_daftar"],
                    "syarat_daftar" => $_POST["syarat_daftar"],
                    "verified_daftar" => $_POST["verified_daftar"],
                    "status_daftar" => $_POST["status_daftar"],
                ]
            );
            header("location:data_jurusan.php?pesan=Data berhasil di Edit");

        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di Edit !".$err->getMessage());
        }
        break;

    case "delete":
        try {
            $user->Delete($_GET["id"]);
                header("location:data_jurusan.php?pesan=Data berhasil di dihapus");
            
        }catch(PDOException $err){
            header("location:form_jurusan.php?pesan=Data gagal di dihapus !".$err->getMessage());
        }
        break;
    
    default:
        header("location:404.php");
        break;
}