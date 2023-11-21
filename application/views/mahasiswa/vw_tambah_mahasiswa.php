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
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" value="<?= set_value('nim'); ?>">
                                <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>"class="form-select" >
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>

                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-select" value="<?= set_value('prodi'); ?>">
                                    <option selected disabled>Pilih Prodi</option>
                                    <?php foreach($prodi as $p): ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="<?= set_value('asal_sekolah'); ?>">
                                <?= form_error('asal_sekolah', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp">No HP</label>
                                <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= set_value('no_hp'); ?>">
                                <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= set_value('alamat'); ?>">
                                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="mt-2">

                                <a href="<?= site_url('Mahasiswa') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Mahasiswa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->