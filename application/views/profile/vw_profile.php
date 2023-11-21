<div class="container-xxl flex-grow-1 container-p-y">
    <h1 class="h3 mb-4 text-gray 800"><?= $judul; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img src="<?= base_url('assets/assets/img/avatars/') . $user['gambar'];?>" alt="img" class="card-img" style="max-width: 100px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $user['nama']; ?>
                    </h5>
                    <p class="card-text">
                        <?= $user['email']; ?>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Anggota Sejak
                            <?= date('d F Y', $user['date_created']); ?>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>