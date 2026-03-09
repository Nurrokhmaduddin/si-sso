Di **menu Laporan Stok**, yang ditampilkan biasanya adalah **rekap, histori, dan analisis stok**, bukan proses operasional. Tujuannya supaya manajemen bisa **melihat kondisi persediaan secara keseluruhan**.

Berikut yang **umumnya masuk ke Laporan Stok**:

---

# 1️⃣ Laporan Posisi Stok (Stock Position)

Menampilkan **stok saat ini per barang**.

Contoh:

| Barang | Gudang   | Stok |
| ------ | -------- | ---- |
| Semen  | Gudang A | 120  |
| Pasir  | Gudang A | 80   |
| Batu   | Gudang B | 60   |

Biasanya bisa difilter:

* per gudang
* per kategori barang
* per tanggal

---

# 2️⃣ Laporan Mutasi Stok

Menampilkan **pergerakan stok**.

Contoh:

| Tanggal | Barang | Masuk | Keluar | Saldo |
| ------- | ------ | ----- | ------ | ----- |
| 01-01   | Semen  | 100   | 0      | 100   |
| 02-01   | Semen  | 0     | 20     | 80    |
| 03-01   | Semen  | 50    | 0      | 130   |

Sumber mutasi:

* pembelian
* penjualan
* retur
* penyesuaian
* opname

---

# 3️⃣ Laporan Stok Minimum

Menampilkan barang yang **stoknya di bawah batas minimal**.

Contoh:

| Barang | Stok | Minimum | Status |
| ------ | ---- | ------- | ------ |
| Semen  | 20   | 50      | Kurang |
| Besi   | 10   | 30      | Kurang |

Ini berguna untuk:

* perencanaan pembelian
* restock

---

# 4️⃣ Laporan Stok Opname

Menampilkan **hasil pengecekan fisik gudang**.

Contoh:

| Barang | Sistem | Fisik | Selisih |
| ------ | ------ | ----- | ------- |
| Semen  | 100    | 95    | -5      |
| Pasir  | 80     | 82    | +2      |

---

# 5️⃣ Laporan Stok per Gudang

Jika ada banyak gudang.

Contoh:

| Barang | Gudang A | Gudang B | Total |
| ------ | -------- | -------- | ----- |
| Semen  | 50       | 70       | 120   |
| Besi   | 20       | 40       | 60    |

---

# 6️⃣ Laporan Kartu Stok

Ini laporan yang sangat detail.

Biasanya formatnya seperti buku kas stok:

| Tanggal | Transaksi | Masuk | Keluar | Saldo |
| ------- | --------- | ----- | ------ | ----- |
| 01-01   | Pembelian | 100   |        | 100   |
| 02-01   | Penjualan |       | 20     | 80    |
| 03-01   | Retur     | 10    |        | 90    |

---

# 7️⃣ Laporan Stok Mati (Dead Stock)

Menampilkan barang yang **lama tidak bergerak**.

Contoh:

| Barang    | Stok | Terakhir Transaksi |
| --------- | ---- | ------------------ |
| Keramik A | 40   | 120 hari lalu      |

Ini penting untuk:

* diskon
* promo
* clearance

---

# Yang TIDAK masuk Laporan Stok

Beberapa hal ini **lebih cocok di Operation**:

❌ Kekurangan stok order
❌ Backorder
❌ Order pending
❌ Picking barang
❌ Pengiriman

Karena itu **proses kerja**, bukan laporan.

---

# Struktur Laporan Stok yang Ideal

Biasanya menu **Laporan Stok** berisi:

```
Laporan Stok
├─ Posisi Stok
├─ Mutasi Stok
├─ Kartu Stok
├─ Stok Minimum
├─ Stok Opname
└─ Stok Mati
```

---

💡 **Tips penting untuk sistem Anda**

Jika sistem Anda ada **Order**, sangat bagus kalau nanti ada juga:

**Laporan Ketersediaan Stok vs Order**

Contoh:

| Barang | Stok | Total Order | Sisa |
| ------ | ---- | ----------- | ---- |
| Semen  | 100  | 80          | 20   |
| Besi   | 50   | 70          | -20  |

Ini sangat membantu **perencanaan pembelian**.

---

Kalau Anda mau, saya juga bisa bantu buatkan **daftar lengkap laporan untuk sistem distribusi / gudang / sales** (biasanya ada **25+ laporan standar ERP**). Itu akan membuat sistem Anda terasa jauh lebih profesional.
