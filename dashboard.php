<?php include "header.php"; ?>
    <!-- Main Content -->
    <div class="main-content col-md-9 ms-auto">
        <div class="title">
            <h2>Dashboard</h2>
        </div>

        <!-- Get Data Statistik -->
        <?php
            $daftar = new MDaftar();

            //Total
            $total = $daftar->All();

            //Jumlah Per Jurusan
            $total_jurusan = $daftar->select("SELECT j.nama_jurusan,count(d.id_jurusan) as total FROM tb_daftar as d RIGHT JOIN tb jurusan as j ON d.id jurusan = j.id_jurusan GROUP BY j.id jurusan");
        ?>
        <!-- End Data Statistik -->
        <div class="info">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-box card mb-3">
                        <div class="row no-gutters">
                            <div class="icon col-md-4 bg-aqua">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="content">
                                    <h5>Total</h5>
                                    <h1><?= count($total) ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach($total_jurusan as $rsTotal){ ?>
                <div class="col-md-6">
                    <div class="info-box card mb-3">
                        <div class="row no-gutters">
                            <div class="icon col-md-4 bg-red">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col-md-9">
                                <div class="content">
                                    <h5><?= $rsTotal["nama_jurusan"] ?></h5>
                                    <h1><?= $rsTotal["total"] ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>                                          
            </div>
        </div>
    </div>
    <!-- End Main Content -->
<?php include "footer.php"; ?>