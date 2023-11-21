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
                        <form action="<?= base_url('Calon_presiden/upload/'); ?>" method="POST">
                            <div class="form-group mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
                            </div>

                            <div class="form-group mb-3">
                                <label for="asal">Asal</label>
                                <input type="text" name="asal" class="form-control" id="asal">
                            </div>

                            <div class="form-group mb-3">
                                <label for="partai_pendukung">Partai Pendukung</label>
                                <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung">
                            </div>

                            <div class="form-group mb-3">
                                <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                                <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan">
                            </div>

                            <div class="form-group mb-3">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur">
                            </div>
                            <div class="mt-2">
                                <a href="<?= site_url('Calon_presiden') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Calon Presiden</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->