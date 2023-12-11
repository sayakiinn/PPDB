<?php include "header.php"; ?>
    <!-- Main Content -->
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Laporan</h2>
        </div>
        <!-- Get Data From tb Jurusan -->
        <?php
            $jurusan = new MJurusan();
            $dtJurusan = $jurusan->All();
        ?>
        <!-- End Get Data From tb_Jurusan -->
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="cetak_laporan.php" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Jurusan</label>
                                <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                                    <option value="">- Pilih Jurusan -</option>
                                    <?php foreach($dtJurusan as $rsJurusan) { ?>
                                        <option value="<?= $rsJurusan["id_jurusan"] ?>"><?= $rsJurusan ["nama_jurusan"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="CETAK" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
<?php include "footer.php"; ?>