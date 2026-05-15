<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h3 class="mb-4">Edit Dosen</h3>

    <form action="<?= base_url('/dosen/update/' . $dosen['id']) ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" value="<?= esc($dosen['nama']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIDN</label>
            <input type="text" name="nidn" value="<?= esc($dosen['nidn']) ?>" class="form-control" required inputmode="numeric">
        </div>

        <div class="mb-3">
            <label class="form-label">NRP</label>
            <input type="text" name="nrp" value="<?= esc($dosen['nrp']) ?>" class="form-control" required inputmode="numeric">
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi</label>
            <input type="text" name="prodi" value="<?= esc($dosen['prodi']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="no_hp" value="<?= esc($dosen['no_hp']) ?>" class="form-control" required inputmode="tel">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="<?= esc($dosen['email']) ?>" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-warning">Update</button>
            <a href="<?= base_url('/dosen') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
