<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h3 class="mb-4">Edit Mahasiswa</h3>

    <form action="<?= base_url('/mahasiswa/update/' . $mahasiswa['id']) ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="<?= esc($mahasiswa['nama']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" value="<?= esc($mahasiswa['nim']) ?>" class="form-control" required inputmode="numeric">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" value="<?= esc($mahasiswa['jenis_kelamin']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" value="<?= esc($mahasiswa['prodi']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" value="<?= esc($mahasiswa['kelas']) ?>" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-warning">Update</button>
            <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
        </div>
</form>
</div>

<?= $this->endSection() ?>
