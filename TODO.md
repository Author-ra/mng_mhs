# TODO (Desain UI Elegant Internasional)

## Rencana perubahan

- [ ] Samakan komponen UI (card, header, table, form) antar halaman `dashboard`, `mahasiswa/index`, `mahasiswa/tambah`, `mahasiswa/edit`, `dosen/index`, `dosen/tambah`, `dosen/edit`.
- [ ] Rapikan wording/penamaan tombol dan judul agar konsisten bahasa Indonesia (tetap label Indonesia).
- [ ] Buat “design system” sederhana di `app/Views/layout.php`: variabel warna, spacing, shadow, radius, dan kelas utilitas (mis. `.page-card`, `.page-title`, `.btn-app`).
- [ ] Standarkan tabel: hilangkan border berlebihan, pakai header yang lebih modern, hover state elegan.
- [ ] Standarkan form: layout lebih rapi, tombol dalam footer yang konsisten.
- [ ] Rapikan modal hapus: konsistensi teks, ukuran, dan spacing.
- [ ] (Opsional) Rapikan markup agar tidak ada indentasi/struktur div yang kacau.

## Catatan

- File `app/Views/*/delete.php` saat ini kosong dan tidak dipakai oleh halaman index (hapus menggunakan modal + link GET delete).
