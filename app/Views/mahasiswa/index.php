<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <h3 class="mb-3">Data Mahasiswa</h3>

    <a href="<?= base_url('/mahasiswa/tambah') ?>" class="btn btn-primary mb-3">
        + Tambah Mahasiswa
    </a>

    <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no=1; foreach($mahasiswa as $m): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m['nama'] ?></td>
                    <td><?= $m['nim'] ?></td>
                    <td><?= $m['jenis_kelamin'] ?></td>
                    <td><?= $m['prodi'] ?></td>
                    <td><?= $m['kelas'] ?></td>

                    <td>
                        <a href="<?= base_url('/mahasiswa/edit/'.$m['id']) ?>"
                           class="btn btn-warning btn-sm">Edit</a>

                        <a href="#"
                           class="btn btn-danger btn-sm js-delete-mahasiswa"
                           data-id="<?= $m['id'] ?>"
                           data-href="<?= base_url('/mahasiswa/delete/'.$m['id']) ?>">
                           Hapus
                        </a>
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>

        </table>

</div>

<!-- MODAL KONFIRMASI HAPUS (MAHASISWA) -->
<div class="modal fade" id="modalHapusMahasiswa" tabindex="-1" aria-labelledby="modalHapusMahasiswaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusMahasiswaLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>

            <div class="modal-body">
                Apakah anda ingin menghapus data ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a id="linkKonfirmasiHapusMahasiswa" href="#" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalEl = document.getElementById('modalHapusMahasiswa');
        const modal = new bootstrap.Modal(modalEl);

        document.querySelectorAll('.js-delete-mahasiswa').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const href = btn.getAttribute('data-href');
                const link = document.getElementById('linkKonfirmasiHapusMahasiswa');
                link.setAttribute('href', href);
                modal.show();
            });
        });
    });
</script>

<?= $this->endSection() ?>
