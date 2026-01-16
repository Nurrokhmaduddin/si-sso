Baik, saya rapikan **secara terstruktur, rapi, dan siap dijadikan spesifikasi dashboard & laporan sistem**. Saya juga menyesuaikan dengan **prinsip OBE, monitoring akademik, dan kebutuhan akreditasi**.

---

# 📊 A. INFORMASI & LAPORAN WAJIB

**Versi Terbaru**

**Prinsip Urutan Penyajian**

1. **Hingga saat ini** → *Rekap / Summary*
2. **Saat ini** → *Monitoring / Operasional*
3. **Filter by time** → *Riwayat / Historis*

---

## I. Kelompok Laporan & KPI Utama

| Kelompok Laporan     | Judul Laporan / KPI Utama                                             |
| -------------------- | --------------------------------------------------------------------- |
| Ringkasan Aktivitas  | Jumlah mahasiswa aktif per aktivitas                                  |
| Progress / Tahapan   | Status per stage: not_started, in_progress, waiting_review, completed |
| Durasi & Throughput  | Rata-rata durasi penyelesaian (start → finish)                        |
| Perpanjangan / Macet | Jumlah perpanjangan & mahasiswa macet                                 |
| Taskboard / Respons  | Task baru, overdue, rata-rata waktu respons dosen                     |
| Komunikasi           | Volume komunikasi & last_activity_at                                  |
| Dokumen & Pustaka    | Kelengkapan dokumen per tahap                                         |
| Ujian & Evaluasi     | Jadwal ujian, penguji, nilai rubrik, nilai akhir                      |
| Beban Dosen          | Jumlah mahasiswa aktif per dosen & durasi rata-rata                   |
| Audit & Perubahan    | Log status, perubahan pembimbing, SK/Surat Tugas                      |
| Notifikasi           | Rekap WA/Email/In-App (success, fail, response time)                  |

---

## II. BAGIAN 1 — KPI (4 Card Utama)

**Rekomendasi KPI Card (Ringkasan Cepat)**

1. **Status Mahasiswa**

   * Aktif
   * Macet (EWS)
   * Selesai
   * Belum Mulai

2. **Progress Tahapan**

   * % Mahasiswa in_progress
   * % waiting_review
   * % completed

3. **Durasi & Perpanjangan**

   * Rata-rata durasi bimbingan
   * Jumlah mahasiswa perpanjangan semester

4. **Kinerja Dosen**

   * Rata-rata mahasiswa per dosen
   * Rata-rata waktu respons dosen

> 💡 **Tujuan:** gambaran cepat kondisi prodi *hari ini*

---

## III. BAGIAN 2 — Visualisasi Grafik (Bar Chart – Direkomendasikan)

### 📊 Grafik Bar yang Disarankan

1. **Distribusi Mahasiswa per Tahapan**

   * X-axis: Tahapan
   * Y-axis: Jumlah Mahasiswa

2. **Progress Mahasiswa per Semester**

   * X-axis: Semester
   * Y-axis: Jumlah mahasiswa
   * Series: aktif / macet / selesai

3. **Beban Bimbingan Dosen**

   * X-axis: Nama Dosen
   * Y-axis: Jumlah Mahasiswa Aktif

4. **Rata-rata Durasi Penyelesaian**

   * X-axis: Aktivitas (Skripsi, Magang, RPL)
   * Y-axis: Rata-rata bulan

5. **Jumlah Mahasiswa Macet (EWS)**

   * X-axis: Semester
   * Y-axis: Jumlah mahasiswa

> 💡 **Alasan Bar Chart:**
> Mudah dibaca, cocok untuk perbandingan, dan efektif untuk rapat prodi & akreditasi.

---

## IV. BAGIAN 3 — Tabel Granular (Detail & Operasional)

### 📋 Rekomendasi Tabel Utama

### 1️⃣ Tabel Monitoring Mahasiswa

**Data yang Ditampilkan**

* NIM
* Nama
* Aktivitas
* Tahapan Saat Ini
* Status
* Lama Bimbingan (hari/bulan)
* Jumlah Revisi
* Jumlah Pertemuan
* Status Dokumen
* Flag Risiko (Hijau/Kuning/Merah)
* Aksi

---

### 2️⃣ Tabel Kinerja Dosen

**Data**

* Nama Dosen
* Jumlah Mahasiswa Aktif
* Jumlah Selesai
* Jumlah Macet
* Rata-rata Durasi
* Rata-rata Respons
* Nilai Evaluasi Mahasiswa

---

### 3️⃣ Tabel Riwayat Bimbingan

**Data**

* Tanggal
* Jenis Bimbingan (Offline / Online)
* Catatan Dosen
* Revisi Diminta
* Status Review

---

### 4️⃣ Tabel Dokumen & Pustaka

**Data**

* Mahasiswa
* Tahap
* Jenis Dokumen
* Status (Lengkap / Tidak)
* Tanggal Upload
* Versi

---

### 5️⃣ Tabel Audit & Perubahan

**Data**

* Waktu
* Aktor
* Aksi
* Status Lama → Baru
* Keterangan

---

## V. Laporan Per Semester

### 🔁 Rekap Per Semester

* Aktivitas bimbingan
* Statistik mahasiswa per aktivitas
* Perpanjangan masa bimbingan
* Pemetaan masalah mahasiswa
* Distribusi aktivitas

---

## VI. Laporan Kinerja Dosen

### 🎓 Indikator Utama

* Beban bimbingan
* Frekuensi interaksi
* Lama penyelesaian rata-rata
* Penilaian mahasiswa (kuesioner)

---

## VII. Laporan Aktivitas (Per Jenis)

* Jumlah peserta
* Tingkat penyelesaian
* Lama penyelesaian
* Tracking tahapan
* EWS aktif

---

## VIII. Laporan Ujian

* Jadwal ujian
* Komposisi penguji
* Nilai rubrik
* Nilai akhir
* Riwayat revisi

---

## IX. Laporan Administrasi

* Rekap Surat Tugas & SK
* Dokumen wajib per tahap
* Status kelengkapan
* Pustaka file mahasiswa

---

### ✅ Penutup

Struktur ini:

* **Siap dashboard**
* **Siap akreditasi (OBE, APS, LED)**
* **Mudah dikembangkan ke sistem monitoring & EWS**

Jika mau, langkah berikutnya saya bisa:

* Buatkan **wireframe dashboard**
* Buatkan **struktur tabel database**
* Buatkan **contoh KPI card + bar chart + tabel HTML/AdminLTE**
* Mapping ke **kebutuhan akreditasi OBE & MBKM**
