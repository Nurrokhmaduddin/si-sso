<?php $page = 'general-journal'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>

<div class="content-wrapper">

  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h3 class="mb-1">
            Form Jurnal Umum
            <button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan">
              <i class="fas fa-question-circle"></i>
            </button>
          </h3>
          <p class="text-muted mb-0">
            Form pencatatan jurnal umum beserta detail COA debit dan kredit.
          </p>
        </div>

        <div>
          <a href="fi-entries-journal.php" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <form action="" method="POST">

        <!-- CARD HEADER -->
        <div class="card card-primary card-outline">

          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-book me-1"></i> Jurnal Header
            </h3>
          </div>

          <div class="card-body">

            <div class="alert alert-warning py-2">
              <i class="fas fa-info-circle me-1"></i>
              Pastikan total <strong>Debit</strong> dan <strong>Kredit</strong> seimbang sebelum menyimpan jurnal.
            </div>

            <div class="row">

              <!-- Tanggal Posting -->
              <div class="col-md-4 mb-4">
                <label class="form-label">Tanggal Posting <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="posting_date">
              </div>

              <!-- Journal Type -->
              <div class="col-md-4 mb-4">
                <label class="form-label">Journal Type <span class="text-danger">*</span></label>
                <select class="form-select" name="journal_type">
                  <option value="">-- Pilih Type --</option>
                  <option>General Journal</option>
                  <option>Adjustment Journal</option>
                  <option>Closing Journal</option>
                  <option>Opening Balance</option>
                </select>
              </div>

              <!-- No Journal -->
              <div class="col-md-4 mb-4">
                <label class="form-label">No Journal</label>
                <input type="text"
                       class="form-control bg-light"
                       value="JRNL-20250901-0001"
                       readonly>
              </div>

              <!-- Deskripsi -->
              <div class="col-md-12 mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text"
                       class="form-control"
                       name="description"
                       placeholder="Input deskripsi jurnal">
              </div>

              <!-- Document Type -->
              <div class="col-md-6 mb-3">
                <label for="document_type" class="form-label">
                  Tipe Dokumen
                </label>
                <select class="form-select"
                  id="document_type"
                  name="document_type">
                  <option value="">                  -- Pilih Tipe Dokumen --                </option>
                  <option value="invoice">                  Invoice                </option>
                  <option value="receipt">                  Receipt                </option>
                  <option value="payment">                  Payment                </option>
                  <option value="journal">                  Journal                </option>
                </select>
              </div>

              <!-- Document Number -->
              <div class="col-md-6 mb-3">
                <label for="document_number" class="form-label">
                  Nomor Dokumen
                </label>

                <input type="text"
                class="form-control"
                id="document_number"
                name="document_number"
                placeholder="Masukkan nomor dokumen">
              </div>

            </div>
          </div>
        </div>

        <!-- DETAIL JURNAL -->
        <div class="card card-success card-outline">

          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-list me-1"></i> Jurnal Detail
            </h3>
          </div>

          <div class="card-body">

            <div class="table-responsive">

              <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                  <tr class="text-center">
                    <th style="width: 25%;">COA</th>
                    <th style="width: 15%;">Debit</th>
                    <th style="width: 15%;">Kredit</th>
                    <th style="width: 18%;">Subledger Type</th>
                    <th style="width: 18%;">Subledger ID</th>
                    <th style="width: 9%;">Aksi</th>
                  </tr>
                </thead>

                <tbody id="journalDetailBody">

                  <!-- ROW -->
                  <tr>

                    <!-- COA -->
                    <td>
                      <select class="form-select" name="coa[]">
                        <option value="">-- Pilih COA --</option>
                        <option>1001 - Kas</option>
                        <option>1101 - Bank</option>
                        <option>1201 - Piutang Usaha</option>
                        <option>5101 - Beban Operasional</option>
                      </select>
                    </td>

                    <!-- Debit -->
                    <td>
                      <input type="number"
                             class="form-control text-end debit"
                             name="debit[]"
                             value="0">
                    </td>

                    <!-- Kredit -->
                    <td>
                      <input type="number"
                             class="form-control text-end kredit"
                             name="kredit[]"
                             value="0">
                    </td>

                    <!-- Subledger Type -->
                    <td>
                      <select class="form-select" name="subledger_type[]">
                        <option value="">-- Pilih --</option>
                        <option>Customer</option>
                        <option>Vendor</option>
                        <option>Employee</option>
                      </select>
                    </td>

                    <!-- Subledger ID -->
                    <td>
                      <input type="text"
                             class="form-control"
                             name="subledger_id[]"
                             placeholder="Input ID">
                    </td>

                    <!-- Aksi -->
                    <td class="text-center">
                      <button type="button"
                              class="btn btn-danger btn-sm removeRow">
                        <i class="fas fa-trash"></i>
                      </button>
                    </td>

                  </tr>

                </tbody>
              </table>
            </div>

            <!-- BUTTON ADD -->
            <div class="mt-3">
              <button type="button"
                      class="btn btn-success w-100"
                      id="addRow">
                <i class="fas fa-plus me-1"></i>
                Tambah COA
              </button>
            </div>

            <!-- TOTAL -->
            <div class="row justify-content-end mt-4">

              <div class="col-md-4">

                <table class="table table-bordered">
                  <tr>
                    <th>Total Debit</th>
                    <td class="text-end fw-bold" id="totalDebit">0</td>
                  </tr>

                  <tr>
                    <th>Total Kredit</th>
                    <td class="text-end fw-bold" id="totalKredit">0</td>
                  </tr>

                  <tr class="table-warning">
                    <th>Selisih</th>
                    <td class="text-end fw-bold" id="selisih">0</td>
                  </tr>
                </table>

              </div>

            </div>

          </div>

          <!-- FOOTER -->
          <div class="card-footer text-end">

            <button type="reset" class="btn btn-secondary">
              <i class="fas fa-undo me-1"></i> Reset
            </button>

            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save me-1"></i> Simpan Jurnal
            </button>

          </div>

        </div>

      </form>

    </div>
  </section>

</div>

<?php include('4footer.php'); ?>
<!-- Modal Impor -->
<div class="modal fade" id="modalImpor" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Impor Data</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">   
        <div class="alert alert-warning mb-3 py-2" role="alert" style="font-size: 0.9rem;">
          <i class="fas fa-exclamation-triangle me-1"></i>
          <strong>Penting:</strong> Pastikan file yang akan diimpor menggunakan <strong>template resmi</strong> yang sudah disediakan. Menggunakan file lain atau format berbeda dapat menyebabkan <strong>kesalahan impor</strong>.
        </div>     

        <label class="form-label">Pilih File:</label>
        <input type="file" class="form-control mb-3" accept=".xlsx,.xls">

        <a href="template-impor-mahasiswa.xls" class="btn btn-sm btn-outline-success w-100">Download Template</a>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Impor</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Bantuan -->
<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalBantuanLabel">Bantuan Tabel</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Ini adalah penjelasan panjang tentang tabel. Anda bisa menuliskan informasi detail,
          petunjuk penggunaan tombol, cara membaca data, dan tips penting lainnya di sini.
        </p>
        <p>
          Misalnya:  
          - Tombol Filter digunakan untuk memfilter data berdasarkan kolom.  
          - Tombol Impor digunakan untuk memasukkan data dari file Excel.  
          - Tombol Reset akan menghapus semua data di tabel, gunakan dengan hati-hati.  
        </p>
        <p>
          Anda bisa menambahkan banyak paragraf atau daftar sesuai kebutuhan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalGagal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content border-danger border-2 shadow">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalGagalLabel"><i class="fas fa-times-circle me-2"></i>Oops! Terjadi Kesalahan</h5>
      </div>
      <div class="modal-body">
        <p><strong>❌ Masalah:</strong><br> 
          <span id="errorAction">Upload file gagal.</span></p>

        <p><strong>⚠️ Penyebab:</strong><br> 
          <span id="errorReason">Format file tidak sesuai (.pdf/.docx) atau ukuran melebihi 5MB.</span></p>

        <p><strong>💡 Solusi:</strong><br> 
          <span id="errorSolution">Pastikan file sesuai format, ukuran < 5MB, lalu coba unggah lagi.</span></p>

        <p><i>Jika masih gagal, hubungi admin untuk bantuan atau tips lebih lanjut.</i></p>

        <!-- Optional: reward tip gamified -->
        <div class="alert alert-warning mt-3" role="alert">
          🔹 Tip: Setiap percobaan upload berhasil akan menambah EXP +20! Jangan menyerah! 🚀
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="closeGagal" data-bs-dismiss="modal"><i class="fas fa-check me-1"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('5script.php'); ?>

<script>

  // TAMBAH BARIS
  document.getElementById('addRow').addEventListener('click', function () {

    let tableBody = document.getElementById('journalDetailBody');

    let newRow = `
      <tr>

        <td>
          <select class="form-select" name="coa[]">
            <option value="">-- Pilih COA --</option>
            <option>1001 - Kas</option>
            <option>1101 - Bank</option>
            <option>1201 - Piutang Usaha</option>
            <option>5101 - Beban Operasional</option>
          </select>
        </td>

        <td>
          <input type="number"
                 class="form-control text-end debit"
                 name="debit[]"
                 value="0">
        </td>

        <td>
          <input type="number"
                 class="form-control text-end kredit"
                 name="kredit[]"
                 value="0">
        </td>

        <td>
          <select class="form-select" name="subledger_type[]">
            <option value="">-- Pilih --</option>
            <option>Customer</option>
            <option>Vendor</option>
            <option>Employee</option>
          </select>
        </td>

        <td>
          <input type="text"
                 class="form-control"
                 name="subledger_id[]"
                 placeholder="Input ID">
        </td>

        <td class="text-center">
          <button type="button"
                  class="btn btn-danger btn-sm removeRow">
            <i class="fas fa-trash"></i>
          </button>
        </td>

      </tr>
    `;

    tableBody.insertAdjacentHTML('beforeend', newRow);

  });


  // HAPUS ROW
  document.addEventListener('click', function(e){

    if(e.target.closest('.removeRow')){

      let rows = document.querySelectorAll('#journalDetailBody tr');

      if(rows.length > 1){
        e.target.closest('tr').remove();
        calculateTotal();
      }

    }

  });


  // HITUNG TOTAL
  document.addEventListener('input', function(e){

    if(
      e.target.classList.contains('debit') ||
      e.target.classList.contains('kredit')
    ){
      calculateTotal();
    }

  });


  function calculateTotal(){

    let totalDebit = 0;
    let totalKredit = 0;

    document.querySelectorAll('.debit').forEach(function(item){
      totalDebit += parseFloat(item.value) || 0;
    });

    document.querySelectorAll('.kredit').forEach(function(item){
      totalKredit += parseFloat(item.value) || 0;
    });

    let selisih = totalDebit - totalKredit;

    document.getElementById('totalDebit').innerText =
      totalDebit.toLocaleString('id-ID');

    document.getElementById('totalKredit').innerText =
      totalKredit.toLocaleString('id-ID');

    document.getElementById('selisih').innerText =
      selisih.toLocaleString('id-ID');

  }

</script>
