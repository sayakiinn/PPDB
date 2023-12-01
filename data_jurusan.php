<?php include "header.php"; ?>
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Data jurusan</h2>
        </div>

        <?php
            $jurusan = new Mjurusan();
            $dtJurusan = $jurusan->All();
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
                        <th scope="col">ID</th>
                        <th scope="col">PAGU</th>
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
                            <a href="form_jurusan.php?id=<?= $rsJurusan["id_jurusan"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i></a>
                            <a href="action_jurusan.php?id=<?= $rsJurusan["id_jurusan"] ?>&ac=delete"  class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i></a>
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