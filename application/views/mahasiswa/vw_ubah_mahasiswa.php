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
                        <input type="hidden" name="id" value=<?= $mahasiswa['id']; ?>>
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control" id="nama">
                                <?= form_error('nama', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control" id="nim">
                                <?= form_error('nim', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option value="Laki-laki" <?= ($mahasiswa['jenis_kelamin'] == 'Laki-laki') ? 'selected' : '' ; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= ($mahasiswa['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ; ?>>Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="email">
                                <?= form_error('email', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-select">
                                <?php foreach($prodi as $p): ?>
                                    <option value="<?= $p['id'] ?>" <?= ($mahasiswa['prodi'] == $p['id']) ? 'selected' : '' ; ?>><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" class="form-control" id="asal_sekolah">
                                <?= form_error('asal_sekolah', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp">No HP</label>
                                <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control" id="no_hp">
                                <?= form_error('no_hp', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control" id="alamat">
                                <?= form_error('alamat', '<small class="text-danger">', '</small>');?>
                            </div>
                            <div class="mt-2">

                                <a href="<?= site_url('Mahasiswa') ?>" class="btn btn-danger me-3">Tutup</a>
                                <button type="submit" name="edit" class="btn btn-primary float-right">Edit Mahasiswa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->