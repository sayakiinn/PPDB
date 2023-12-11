<?php include "header.php"; ?>
    <!-- Main Content  -->
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Data jurusan</h2>
        </div>

        <!-- Get Data From tb_jurusan  -->
        <?php
            $jurusan = new MJurusan();
            $dtJurusan = $jurusan->All();
        ?>
         <!-- End Get Data From tb_jurusan  -->

        <!-- Message  -->
        <?php if(isset($_GET["pesan"])){ ?>
            <div class="alert alert-info" role="alert">
                <?= $_GET["pesan"] ?>
            </div>
        <?php } ?>
        <!-- Message  -->

        <a href="form_jurusan.php" class="btn btn-danger btn-sm mb-3"><i class="fas fa-plus"></i>ADD NEW</a>

        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead class="bg-danger text-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">PAGU</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($dtJurusan as $rsJurusan){
                    ?>
                    <tr>
                        <td><?= $rsJurusan["id_jurusan"] ?></td>
                        <td><?= $rsJurusan["nama_jurusan"] ?></td>
                        <td><?= $rsJurusan["pagu_jurusan"] ?></td>
                        <td>
                            <?php if($rsJurusan["status_jurusan"]==1){ ?>
                                <span class="badge bg-success">Aktif</span>
                            <?php } else { ?>
                                <span class="badge bg-danger">Non Aktif</span>
                            <?php } ?>
                        </td>
                        <td> 
                            <a href="form_jurusan.php?id=<?= $rsJurusan["id_jurusan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="action_jurusan.php?id=<?= $rsJurusan["id_jurusan"] ?>&ac=delete" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Main Content  -->
<?php include "footer.php"; ?>