    <div class="container-xxl flex-grow-1 container-p-y">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">Form Tambah Data Calon Presiden
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Calon_presiden/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $calon_presiden['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" value="<?= $calon_presiden['nik']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $calon_presiden['nama_lengkap']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" class="form-control" id="asal" value="<?= $calon_presiden['asal']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="partai_pendukung">Partai Pendukung</label>
                                <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung" value="<?= $calon_presiden['partai_pendukung']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                                <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan" value="<?= $calon_presiden['riwayat_pekerjaan']; ?>">
                            </div>

                            <div class="form-group mb-3">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur" value="<?= $calon_presiden['umur']; ?>">
                            </div>
                            <div class="mt-2">
                                <a href="<?= site_url('Calon_presiden') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Edit Calon Presiden</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->