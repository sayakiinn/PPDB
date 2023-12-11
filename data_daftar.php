<?php include "header.php"; ?>
    <!-- Main Content -->
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Data Pendaftaran</h2>
        </div>

        <!-- Get Data From tb Daftar -->
        <?php
            $daftar = new MDaftar();
            $sql = "SELECT d.*,j.nama_jurusan FROM tb_daftar as d INNER JOIN tb_jurusan as j ON d.id_jurusan = j. id_jurusan WHERE status_daftar=1";
            $dtDaftar = $daftar->select($sql);
        ?>
        <!-- End Get Data From tb Daftar -->

        <!-- Message  -->
        <?php if(isset($_GET["pesan"])){ ?>
            <div class="alert alert-info" role="alert">
                <?= $_GET["pesan"] ?>
            </div>
        <?php } ?>
        <!-- End Message  -->

        <table class="dt-Table table table-bordered" width="100%"> 
            <thead class="bg-danger text-light">
                <tr>
                    <th scope="col" data-priority="1">NO DAFTAR</th>
                    <th scope="col" data-priority="2">NAMA</th>
                    <th scope="col" data-priority="3">JURUSAN</th>
                    <th scope="col">SYARAT</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($dtDaftar as $rsDaftar){
                ?>
                <tr>
                    <td><a href="detail_daftar.php?id=<?= $rsDaftar["id_daftar"] ?>"><?= $rsDaftar["no_daftar"] ?></a></td>
                    <td><?= $rsDaftar["nm_daftar"] ?></td>
                    <td><?= $rsDaftar ["nama_jurusan"] ?></td>
                    <td>
                        <?php
                            if(isset($rsDaftar["syarat_daftar"])){
                        ?>
                            <a class="btn btn-primary btn-sm" href="syarat/<?= $rsDaftar["syarat_daftar"] ?>" target="_blank"><i class="fas fa-eye"></i> LIHAT</a>
                        <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php if(@$rsDaftar ["verified_daftar"]==0){ ?>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ACTION
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="update_verifikasi_daftar.php?id=<?= $rsDaftar ["id_daftar"] ?>& verifikasi=1" class="dropdown-item text-success" style="font-size: 14px;" title="Verifikasi"><i class="fas fa-check"></i> Verifikasi</a></li>
                                <li>
                                    <a href="update_status_daftar.php?id=<?= $rsDaftar ["id_daftar"] ?>&status=2" class="dropdown-item text-danger" style="font-size: 14px;" title="Tolak"><i class="fas fa-times"></i> Tolak</a>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php include "footer.php"; ?>