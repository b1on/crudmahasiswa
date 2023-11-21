<!-- Content wrapper -->
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="nama_prodi">Nama Prodi</label>
                                <input type="text" name="nama_prodi" class="form-control" id="nama_prodi"
                                    value="<?= set_value('nama_prodi'); ?>">
                                <?= form_error('nama_prodi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" class="form-control" id="ruangan"
                                    value="<?= set_value('ruangan'); ?>">
                                <?= form_error('ruangan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select"
                                    value="<?= set_value('jurusan'); ?>">
                                    <option selected disabled>Jurusan</option>
                                    <option value="JTI">JTI</option>
                                    <option value="JTIN">JTIN</option>
                                </select>
                                <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="akreditasi">Akreditasi</label>
                                <select name="akreditasi" id="akreditasi" class="form-select"
                                    value="<?= set_value('akreditasi'); ?>">
                                    <option selected disabled>Akreditasi</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                                <?= form_error('akreditasi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="kaprodi">Nama Kaprodi</label>
                                <input type="text" class="form-control" name="nama_kaprodi" id="kaprodi"
                                    value="<?= set_value('nama_kaprodi'); ?>">
                                <?= form_error('nama_kaprodi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"
                                    value="<?= set_value('tahun_berdiri'); ?>">
                                <?= form_error('tahun_berdiri', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="output_lulusan">Output lulusan</label>
                                <input type="text" name="output_lulusan" class="form-control" id="output_lulusan"
                                    value="<?= set_value('output_lulusan'); ?>">
                                <?= form_error('output_lulusan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="form-control custom-file-input" id="gambar">
                                    <label class="custom-file-label" for="gambar"></label>
                                </div>
                                <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="mt-2">
                                <a href="<?= site_url('Prodi') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Prodi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->