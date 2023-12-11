<?php include "header.php"; ?>
    <!-- Main Content -->
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Detail Pendaftaran</h2>
        </div>
        <!-- Get Data From tb_Daftar -->
        <?php
            $id_daftar = $_GET["id"];
            $daftar = new MDaftar();
            $sql = "SELECT d.*,j.nama_jurusan FROM tb_daftar as d INNER JOIN tb_jurusan as j ON d.id_jurusan = j.id_jurusan WHERE id_daftar=$id_daftar";
            $dtDaftar = $daftar->select($sql);
            $rsDaftar = $dtDaftar[0]; // Single Data
        ?>
        <!-- End Get Data From tb_Daftar -->
        <table class="table">
            <tr>
                <td class="fw-bold" width="30%">No Pendaftaran</td>
                <td>: <?= $rsDaftar ["no_daftar"] ?></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>: <?= $rsDaftar ["nisn"] ?></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td>: <?= $rsDaftar ["tgl_daftar"] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?= $rsDaftar["nm_daftar"] ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: <?= $rsDaftar ["tmp_lahir_daftar"] ?> , <?= date("d F Y", strtotime($rsDaftar["tgl_lahir_daftar"])) ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?= $rsDaftar["alamat_daftar"] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?= $rsDaftar["jk_daftar"] == 1 ? "Laki-Laki": "Perempuan" ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: <?= $rsDaftar["agama_daftar"] ?></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>: <?= $rsDaftar["telp_daftar"] ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>: <?= $rsDaftar ["asal_sekolah_daftar"] ?></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>: <?= $rsDaftar ["nilai_daftar"] ?></td>
            </tr>
            <tr>
                <td>Jurusan yang dipilih</td>
                <td>: <?= $rsDaftar ["nama_jurusan"] ?></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>: <?= $rsDaftar ["nm_ayah_daftar"] ?></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>: <?= $rsDaftar["nm_ibu_daftar"] ?></td>
            </tr>
            <tr>
                <td>Syarat</td>
                <td>:
                    <?php
                        if(isset($rsDaftar["syarat_daftar"])){
                    ?>
                        <a class="btn btn-primary btn-sm" href="syarat/<?= $rsDaftar["syarat_daftar"] ?>" target="_blank"><i class="fas fa-eye"></i> LIHAT</a>
                    <?php
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Verified</td>
                <td>: <span class="badge bg-<?= $rsDaftar["verified_daftar"]==1? "success": "warning" ?>"><?= $rsDaftar ["verified_daftar"]==1? "Verified" : "Belum Verified" ?></span></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:
                    <!-- Diserahkan -->
                    <?php if( $rsDaftar ["status_daftar"]==1){ ?>
                        <span class="badge bg-warning">Diserahkan</span>
                    <?php } ?>
                    <!-- Ditolak -->
                    <?php if( $rsDaftar ["status_daftar"]==2){ ?> 
                        <span class="badge bg-danger">Ditolak</span>
                    <?php } ?>
                    <!-- Diterima -->
                    <?php if( $rsDaftar ["status_daftar"]==3){ ?>
                        <span class="badge bg-warning">Diterima</span>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- End Main Content ->
<?php include "footer.php"; ?>