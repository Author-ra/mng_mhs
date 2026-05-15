<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
        <h3 class="mb-4">Tambah Mahasiswa</h3>

        <form action="<?= base_url('/mahasiswa/tambah') ?>" method="post">

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control">
            </div>
            <button class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>

        </form>
</div>

<?= $this->endSection() ?>