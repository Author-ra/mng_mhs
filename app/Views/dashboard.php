<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card p-4">
    <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
        <div>
            <h3 class="mb-1">Dashboard Akademik</h3>
            <p class="text-muted mb-0">
                Kelola data <b>Mahasiswa</b> dan <b>Dosen</b> dengan cepat dan rapi.
            </p>
        </div>

        <div class="d-flex gap-2">
            <a href="<?= base_url('/mahasiswa') ?>" class="btn btn-primary">Mahasiswa</a>
            <a href="<?= base_url('/dosen') ?>" class="btn btn-primary">Dosen</a>
        </div>
    </div>

    <hr class="my-4">

    <!-- Statistik premium -->
    <div class="row g-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card-inner">
                <div class="mini-card">
                    <div class="mini-icon">🎓</div>
                    <div>
                        <div class="mini-title">Mahasiswa</div>
                        <div class="mini-desc">Total data saat ini</div>
                        <div style="font-size: 28px; font-weight: 900; letter-spacing: 0.2px; margin-top: 8px; color: var(--text);">
                            <?= isset($jumlahMahasiswa) ? (int)$jumlahMahasiswa : 0 ?>
                        </div>
                        <a href="<?= base_url('/mahasiswa') ?>" class="mini-link">Lihat Data →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6">
            <div class="card-inner">
                <div class="mini-card">
                    <div class="mini-icon">👨‍🏫</div>
                    <div>
                        <div class="mini-title">Dosen</div>
                        <div class="mini-desc">Total data saat ini</div>
                        <div style="font-size: 28px; font-weight: 900; letter-spacing: 0.2px; margin-top: 8px; color: var(--text);">
                            <?= isset($jumlahDosen) ? (int)$jumlahDosen : 0 ?>
                        </div>
                        <a href="<?= base_url('/dosen') ?>" class="mini-link">Lihat Data →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-inner">
                <div class="mini-card">
                    <div class="mini-icon">🧱</div>
                    <div>
                        <div class="mini-title">Quick Actions</div>
                        <div class="mini-desc">Tambah data dengan cepat.</div>
                        <div class="d-flex gap-2 flex-wrap" style="margin-top: 10px;">
                            <a href="<?= base_url('/mahasiswa/tambah') ?>" class="btn btn-secondary btn-sm" style="padding: 8px 12px;">+ Mhs</a>
                            <a href="<?= base_url('/dosen/tambah') ?>" class="btn btn-secondary btn-sm" style="padding: 8px 12px;">+ Dsn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-inner">
                <div class="mini-card">
                    <div class="mini-icon">🔔</div>
                    <div>
                        <div class="mini-title">Notifikasi Otomatis</div>
                        <div class="mini-desc">
                            Setiap aksi berhasil akan muncul notifikasi di atas halaman.
                        </div>
                        <div class="mini-hint">Coba: tambah / update / hapus data.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card-inner">
                <div class="mini-card">
                    <div class="mini-icon">📋</div>
                    <div>
                        <div class="mini-title">Status Sistem</div>
                        <div class="mini-desc">Tema premium & data tersinkron.</div>
                        <div class="mini-hint">Siap digunakan.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-inner{ height: 100%; }

    .mini-card{
        height: 100%;
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 16px;
        background:
            radial-gradient(900px 240px at 10% 0%, rgba(212,175,55,0.10) 0%, rgba(255,255,255,0.02) 40%, rgba(0,0,0,0) 70%),
            linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px),
            rgba(15, 15, 15, 0.68);
        box-shadow: 0 14px 28px rgba(0,0,0,0.35);
        padding: 16px;
        display: flex;
        gap: 14px;
        align-items: flex-start;
        backdrop-filter: blur(10px);
    }

    .mini-icon{
        width: 44px;
        height: 44px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(212,175,55,0.22);
        font-size: 20px;
        flex: 0 0 auto;
        box-shadow: 0 10px 20px rgba(0,0,0,0.35);
    }

    .mini-title{
        font-weight: 900;
        letter-spacing: 0.2px;
        margin-top: 2px;
        color: var(--text);
    }

    .mini-desc{
        margin-top: 6px;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.35;
    }

    .mini-link{
        margin-top: 10px;
        display: inline-block;
        font-weight: 900;
        color: rgba(255,255,255,0.95);
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 12px;
        border: 1px solid rgba(212,175,55,0.25);
        background: rgba(212,175,55,0.08);
    }

    .mini-link:hover{
        text-decoration: none;
        color: #fff;
        border-color: rgba(212,175,55,0.45);
        background: rgba(212,175,55,0.12);
    }

    .mini-hint{
        margin-top: 10px;
        font-size: 13px;
        color: rgba(255,255,255,0.66);
        font-weight: 750;
    }
</style>

<?= $this->endSection() ?>
