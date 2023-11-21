<!-- Content wrapper -->
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group mb-3">
                                <label for="nama_prodi">Nama Prodi</label>
                                <input type="text" name="nama_prodi" value="<?= $prodi['nama']; ?>" class="form-control" id="nama_prodi">
                                <?= form_error('nama_prodi', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan">
                                <?= form_error('ruangan', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-select">
                                    <option value="JTI" <?= ($prodi['jurusan'] == 'JTI') ? 'selected' : '' ?>>JTI</option>
                                    <option value="JTIN" <?= ($prodi['jurusan'] == 'JTIN') ? 'selected' : '' ?>>JTIN</option>
                                </select>
                                <?= form_error('jurusan', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="akreditasi">Akreditasi</label>
                                <select name="akreditasi" id="akreditasi" class="form-select">
                                    <option value="A" <?= ($prodi['akreditasi'] == 'A') ? 'selected' : '' ?>>A</option>
                                    <option value="B" <?= ($prodi['akreditasi'] == 'B') ? 'selected' : '' ?>>B</option>
                                    <option value="C" <?= ($prodi['akreditasi'] == 'C') ? 'selected' : '' ?>>C</option>
                                </select>
                                <?= form_error('akreditasi', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="kaprodi">Nama Kaprodi</label>
                                <input type="text" class="form-control" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" id="kaprodi">
                                <?= form_error('nama_kaprodi', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri">
                                <?= form_error('tahun_berdiri', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="output_lulusan">Output lulusan</label>
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="output_lulusan">
                                <?= form_error('output_lulusan', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <img src="<?= base_url('assets/assets/img/') . $prodi['gambar']; ?>" alt="">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" class="form-control" id="gambar">
                                <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="mt-2">
                                <a href="<?= site_url('Prodi') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Prodi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->