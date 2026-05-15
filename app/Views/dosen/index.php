<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h3 class="mb-3">Data Dosen</h3>

    <a href="<?= base_url('/dosen/tambah') ?>" class="btn btn-primary mb-3">
        + Tambah Dosen
    </a>

    <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>NRP</th>
                    <th>Prodi</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; foreach($dosen as $d): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['nidn'] ?></td>
                    <td><?= $d['nrp'] ?></td>
                    <td><?= $d['prodi'] ?></td>
                    <td><?= $d['no_hp'] ?></td>
                    <td><?= $d['email'] ?></td>

                    <td>
                        <a href="<?= base_url('/dosen/edit/'.$d['id']) ?>"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <a href="#"
                           class="btn btn-danger btn-sm js-delete-dosen"
                           data-id="<?= $d['id'] ?>"
                           data-href="<?= base_url('/dosen/delete/'.$d['id']) ?>">
                           Hapus
                        </a>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

</div>

<!-- MODAL KONFIRMASI HAPUS (DOSEN) -->
<div class="modal fade" id="modalHapusDosen" tabindex="-1" aria-labelledby="modalHapusDosenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusDosenLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>

            <div class="modal-body">
                Apakah anda ingin menghapus data ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a id="linkKonfirmasiHapusDosen" href="#" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalEl = document.getElementById('modalHapusDosen');
        const modal = new bootstrap.Modal(modalEl);

        document.querySelectorAll('.js-delete-dosen').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const href = btn.getAttribute('data-href');
                const link = document.getElementById('linkKonfirmasiHapusDosen');
                link.setAttribute('href', href);
                modal.show();
            });
        });
    });
</script>

<?= $this->endSection() ?>
