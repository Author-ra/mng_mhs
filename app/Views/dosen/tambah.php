<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
        <h3 class="mb-4">Tambah Dosen</h3>

        <form action="<?= base_url('/dosen/tambah') ?>" method="post">

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">NIDN</label>
                <input type="text" name="nidn" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">NRP</label>
                <input type="text" name="nrp" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('/dosen') ?>" class="btn btn-secondary">Kembali</a>

        </form>
</div>

<?= $this->endSection() ?>