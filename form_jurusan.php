<?php include "header.php"; ?>

    <div class="main-content col-md-9 ms-auto">

        <?php
        $user = new Mjurusan();

        if(isset($_GET["id"])){
            $Duser = $user->GetByID($_GET["id"])[0];
            
        }
        

        $mode = isset($_GET["id"]) ? "edit" : "add";

        ?>

        <div class="title">
            <h2><?= ucwords($mode) ?> User</h2>
        </div>

        <?php if(isset($_GET["pesan"])){?>
            <div class="alert alert-info" role="alert">
                <?= $_GET ["pesan"] ?>
            </div>
        <?php }  ?>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="action_jurusan.php?ac=<?= $mode ?>" method="post" >
                <div class="mb-3">
                    <input type="hidden" name="id_daftar" value="<?= @$Duser["id_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="no_daftar" class="form-label fw-bold">NO</label>
                    <input type="text" name="no_daftar" id="no_daftar" class="form-control" value="<?= @$Duser["no_daftar"] ?> ">
                </div>
                
                <div class="mb-3">
                    <label for="nisn" class="form-label fw-bold">NISN</label>
                    <input type="text" name="nisn" id="nisn" class="form-control" value="<?= @$Duser["nisn"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="tgl_daftar" class="form-label fw-bold">tanggal mendaftar</label>
                    <input type="date" name="tgl_daftar" id="tgl_daftar" class="form-control" value="<?= @$Duser["tgl_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="nm_daftar" class="form-label fw-bold">nama </label>
                    <input type="text" name="nm_daftar" id="nm_daftar" class="form-control" value="<?= @$Duser["nm_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="tmp_lahir_daftar" class="form-label fw-bold">tempat lahir </label>
                    <input type="text" name="tmp_lahir_daftar" id="tmp_lahir_daftar" class="form-control" value="<?= @$Duser["tmp_lahir_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="tgl_lahir_daftar" class="form-label fw-bold">tanggal lahir </label>
                    <input type="date" name="tgl_lahir_daftar" id="tgl_lahir_daftar" class="form-control" value="<?= @$Duser["tgl_lahir_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="alamat_daftar" class="form-label fw-bold">alamat </label>
                    <input type="text" name="alamat_daftar" id="alamat_daftar" class="form-control" value="<?= @$Duser["alamat_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="jk_daftar" class="form-label fw-bold">Jenis Kelamin</label>
                    <select class="form-select" name="jk_daftar" id="jk_daftar">
                        <option <?= @$Duser["jk_daftar"] == "Laki" ? "selected" : "" ?> value="Laki">Laki</option>
                        <option <?= @$Duser["jk_daftar"] == "Perempuan" ? "selected" : "" ?> value="Perempuan">Perempuan</option>
                    </select>
                   
                </div>

                <div class="mb-3">
                    <label for="agama_daftar" class="form-label fw-bold">Agama</label>
                    <select class="form-select" name="agama_daftar" id="agama_daftar">
                        <option <?= @$Duser["agama_daftar"] == "Islam" ? "selected" : "" ?> value="Islam">Islam</option>
                        <option <?= @$Duser["agama_daftar"] == "Katolik" ? "selected" : "" ?> value="Katolik">Katolik</option>
                        <option <?= @$Duser["agama_daftar"] == "Kristen" ? "selected" : "" ?> value="Kristen">Kristen</option>
                        <option <?= @$Duser["agama_daftar"] == "Hindu" ? "selected" : "" ?> value="Hindu">Hindu</option>
                        <option <?= @$Duser["agama_daftar"] == "Budha" ? "selected" : "" ?> value="Budha">Budha</option>
                        <option <?= @$Duser["agama_daftar"] == "Konghucu" ? "selected" : "" ?> value="Konghucu">Konghucu</option>
                    </select>
                   
                </div>

                <div class="mb-3">
                    <label for="telp_daftar" class="form-label fw-bold">telepon  </label>
                    <input type="text" name="telp_daftar" id="telp_daftar" class="form-control" value="<?= @$Duser["telp_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="asal_sekolah_daftar" class="form-label fw-bold">asal sekolah </label>
                    <input type="text" name="asal_sekolah_daftar" id="asal_sekolah_daftar" class="form-control" value="<?= @$Duser["asal_sekolah_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="nilai_daftar" class="form-label fw-bold">nilai </label>
                    <input type="text" name="nilai_daftar" id="nilai_daftar" class="form-control" value="<?= @$Duser["nilai_daftar"] ?> ">
                </div>

                

                <div class="mb-3">
                    <label for="nm_ayah_daftar" class="form-label fw-bold">nama ayah</label>
                    <input type="text" name="nm_ayah_daftar" id="nm_ayah_daftar" class="form-control" value="<?= @$Duser["nm_ayah_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="nm_ibu_daftar" class="form-label fw-bold">nama ibu </label>
                    <input type="text" name="nm_ibu_daftar" id="nm_ibu_daftar" class="form-control" value="<?= @$Duser["nm_ibu_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="syarat_daftar" class="form-label fw-bold">syarat</label>
                    <input type="text" name="syarat_daftar" id="syarat_daftar" class="form-control" value="<?= @$Duser["syarat_daftar"] ?> ">
                </div>

                <div class="mb-3">
                    <label for="verified_daftar" class="form-label fw-bold">Verfikasi</label>
                    <select class="form-select" name="verified_daftar" id="verified_daftar">
                        <option <?= @$Duser["verified_daftar"] == "Terverifikasi" ? "selected" : "" ?> value="Terverifikasi">Terverifikasi</option>
                        <option <?= @$Duser["verified_daftar"] == "Belum" ? "selected" : "" ?> value="Belum">Belum</option>
                    </select>
                   
                </div>

                <div class="mb-3">
                    <label for="status_daftar" class="form-label fw-bold">status</label>
                    <select class="form-select" name="status_daftar" id="status_daftar">
                        <option <?= @$Duser["status_daftar"] == 1 ? "selected" : "" ?> value="1">Aktif</option>
                        <option <?= @$Duser["status_daftar"] == 0 ? "selected" : "" ?> value="0">Non Aktif</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-danger">
                </div>

                </form>
            </div>
        </div>

    </div>

    <?php include "footer.php"; ?>