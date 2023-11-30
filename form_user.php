<?php include "header.php"; ?>
    <!-- Main Content -->
    <div class="main-content col-md-9 ms-auto">
        <!-- Get Data From tb_User -->
        <?php
            $user = new MUser();

            // Mengambil Data Berdasarkan ID 
            if(isset($_GET["id"])){ 
                $rsUser = $user->GetByID($_GET["id"])[0]; 
            }

            // Cek Parameter ID 
            $mode = isset($_GET["id"]) ? "edit" : "add";
        ?>
        <!-- End Get Data From tb_User -->

        <div class="title"> 
            <h2><?= ucwords($mode) ?> User</h2> 
        </div>

        <!-- Message -->
        <?php if(isset($_GET["pesan"])){ ?>
            <div class="alert alert-info" role="alert"> 
                <?= $_GET["pesan"] ?>
            </div>
        <?php } ?>
        <!-- End Message -->

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="action_user.php?ac=<?= $mode ?>" method="post">
                    <div class="mb-3">
                        <label for="nm_user" class="form-label fw-bold">Nama</label>
                        <input type="hidden" name="id_user" value="<?= @$rsUser["id_user"] ?>">
                        <input type="text" name="nm_user" id="nm_user" class="form-control" value="<?= @$rsUser ["nm_user"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email_user" class="form-label fw-bold">Email</label>
                        <input type="email" name="email_user" id="email_user" class="form-control" value="<?= @$rsUser["email_user"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password_user" class="form-label fw-bold">Password</label>
                        <input type="password" name="password_user" id="password_user" class="form-control">
                        <input type="password" name="old_password" value="<?= @$rsUser["password_user"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="level_user" class="form-label fw-bold">Level</label>
                        <select class="form-select" name="level_user" id="level_user">
                            <option <?= @$rsUser["level_user"] == "Admin" ? "selected" : "" ?>
                            value="Admin">Admin</option>
                            <option <?= @$rsUser["level_user"] == "User" ? "selected" : "" ?> value="User">User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label fw-bold">Status</label>
                        <select class="form-select" name="status" id="status">
                            <option <?= @$rsUser["status"] == 1 ? "selected": "" ?> value="1">Aktif</option>
                            <option <?= @$rsUser["status"] == 0 ? "selected": "" ?> value="0">Non Aktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="SIMPAN" class="btn btn-dangaer">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- End Main Content -->
<?php include "footer.php"; ?>

