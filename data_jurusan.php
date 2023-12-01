<?php include "header.php"; ?>



<div class="main-content col-md-9 ms-auto">
    <div class="title">
        <h2>Data jurusan</h2>
    </div>

    <?php
    $user = new Mjurusan();
    $dataUser = $user->All();
    ?>

    <!-- pesan  -->

    <?php if(isset($_GET["pesan"])){ ?>
        <div class="alert alert-info" role="alert">
            <?= $_GET["pesan"] ?>
        </div>
    <?php } ?>

    <!-- pesan  -->

    <a href="form_jurusan.php" class="btn btn-danger btn-sm mb-3"><i class="fas fa-user-plus"></i> tambah</a>

    <div class="table-responsive table">
        <table class="table table-bordered ">
            <thead class="bg-danger text-light">
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> NO </th>
                    <th scope="col"> NISN</th>
                    <th scope="col"> TANGGAL MENDAFTAR </th>
                    <th scope="col"> NAMA </th>
                    <th scope="col"> TEMPAT LAHIR </th>
                    <th scope="col"> TANGGAL LAHIR </th>
                    <th scope="col"> ALAMAT </th>
                    <th scope="col"> JENIS KELAMIN </th>
                    <th scope="col"> AGAMA </th>
                    <th scope="col"> TELP </th>
                    <th scope="col"> ASAL SEKOLAH </th>
                    <th scope="col"> NILAI </th>
                    <th scope="col"> NAMA AYAH </th>
                    <th scope="col"> NAMA IBU </th>
                    <th scope="col"> SYARAT </th>
                    <th scope="col"> VERIFIED </th>
                    <th scope="col"> STATUS </th>
                    <th scope="col"> ACTION </th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    foreach($dataUser as $duser){
                    ?>
                    <tr>
                        <td><?= $duser["id_daftar"] ?></td>
                       <!--<td><?= $duser["id_user"] ?></td>-->
                        <td><?= $duser["no_daftar"] ?></td>
                        <td><?= $duser["nisn"] ?></td>
                        <td><?= $duser["tgl_daftar"] ?></td>
                        <td><?= $duser["nm_daftar"] ?></td>
                        <td><?= $duser["tmp_lahir_daftar"] ?></td>
                        <td><?= $duser["tgl_lahir_daftar"] ?></td>
                        <td><?= $duser["alamat_daftar"] ?></td>
                        <td><?= $duser["jk_daftar"] ?></td>
                        <td><?= $duser["agama_daftar"] ?></td>
                        <td><?= $duser["telp_daftar"] ?></td>
                        <td><?= $duser["asal_sekolah_daftar"] ?></td>
                        <td><?= $duser["nilai_daftar"] ?></td>
                        <td><?= $duser["nm_ayah_daftar"] ?></td>
                        <td><?= $duser["nm_ibu_daftar"] ?></td>
                        <td><?= $duser["syarat_daftar"] ?></td>
                        <td><?= $duser["verified_daftar"] ?></td>
                        <td>
                        <?php if($duser["status_daftar"]==1){ ?>
                                <span class="badge bg-success">Aktif</span>
                            <?php } else { ?>
                            <span class="badge bg-danger">Non Aktif</span>
                            <?php } ?>
                        </td>
                        <td > 
                            <a href="form_jurusan.php?id=<?= $duser["id_daftar"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i></a>
                            <a href="action_jurusan.php?id=<?= $duser["id_daftar"] ?>&ac=delete"  class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
    

</div>
<?php include "footer.php"; ?>