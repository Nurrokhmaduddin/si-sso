<?php $page='pengaturan_users';?>
<?php include "1header.php"; ?>
<?php include "2navbar.php"; ?>
<?php include "3sidebar.php"; ?>
<div class="content-wrapper" style="min-height: 626.4px;">    

  <section class="content-header">
    <div class="container-fluid">
      <h3 class="mb-0">Daftar Users</h3>
        <p class="text-muted mb-0">Menyimpan akun inti untuk proses autentikasi. Tidak menyimpan hak akses di tabel ini, hanya identitas pengguna.</p>
    </div>
  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- ========== CARD : Filter & Export ========== -->
          <div class="card">
            <!-- <div class="card-header">
              <h5 class="card-title mb-0"><i class="fas fa-filter "></i> Daftar Periode Akademik<button type="button" class="btn btn-tool" data-bs-toggle="modal" data-bs-target="#modalBantuan" title="Bantuan">
                <i class="fas fa-question-circle"></i>
              </button> </h5>
              
            </div> -->
            <!-- <div class="card-body ">
              <div class="row">

                <div class="col-md-6">
                  <b>Angkatan:</b> 2023 &nbsp;
                </div>                
                <div class="col-md-6">
                  <b>Kelas:</b> Peminatan B
                </div>
                <div class="col-md-6">
                  <b>Jalur:</b> Reguler
                </div>
                <div class="col-md-6">
                  <b>Status:</b> Aktif
                </div>

              </div>
            </div> -->
            <div class="card-footer">
              <div class="card-tools ms-auto">
                <button class="btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#modalFilter">
                  <i class="fas fa-filter me-1"></i> Filter
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalTambahData">
                  <i class="fas fa-plus me-1"></i> Add
                </button>
                <button type="button" class="btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modalImpor">
                  <i class="fas fa-file-upload me-1"></i> Import
                </button>                
                <button type="button" class="btn btn-outline-success btn-sm">
                  <i class="fas fa-file-download me-1"></i> Export
                </button>
                 <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetData">
                  <i class="fas fa-ban me-1"></i> Reset
                </button>
              </div>
            </div>
          </div>


<!-- ========== CARD : Tabel  ========== -->
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table1 table-bordered table-striped table-sm datatables1">
        <table class="table table-bordered table-striped table-sm datatables1">
                <thead>
                 <th title="BIGINT • Primary key">id</th>
                 <th title="VARCHAR(150) • Login username">username</th>
                 <th title="VARCHAR(255) • Email unik">email</th>
                 <th title="VARCHAR(255) • Hashed password">password_hash</th>
                 <th title="VARCHAR(255) • Nama utuh">display_name</th>
                 <th title="BOOLEAN • Account aktif?">is_active</th>
                 <th title="TIMESTAMP • Waktu dibuat">created_at</th>
                 <th title="TIMESTAMP • Waktu login terakhir">last_login</th>
                 <th style="width: 80px;">aksi</th>
               </tr>
             </thead>
             <tbody><tr>
              <td>101</td>
              <td>harun.r</td>
              <td>harun@example.id</td>
              <td>$argon2id$XyZ123...</td>
              <td>Harun Ruddin</td>
              <td>1</td>
              <td>2025-11-28 08:00:00</td>
              <td>2025-11-27 12:10:00</td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>

            <tr>
              <td>102</td>
              <td>reka.ms</td>
              <td>reka@example.id</td>
              <td>$argon2id$A1B2C3...</td>
              <td>Reka Mustika Sari</td>
              <td>1</td>
              <td>2025-11-15 09:20:00</td>
              <td>2025-11-28 07:55:00</td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>

            <tr>
              <td>103</td>
              <td>admin.s1</td>
              <td>admin.s1@example.id</td>
              <td>$argon2id$9F8D7C...</td>
              <td>Administrator Sistem</td>
              <td>1</td>
              <td>2025-10-10 13:00:00</td>
              <td>2025-11-28 08:00:00</td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>

            <tr>
              <td>104</td>
              <td>kaprodi.tk</td>
              <td>kaprodi.tk@example.id</td>
              <td>$argon2id$HH22KK...</td>
              <td>Kaprodi Teknik Kimia</td>
              <td>1</td>
              <td>2025-09-01 10:15:00</td>
              <td>2025-11-25 16:40:00</td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>

            <tr>
              <td>105</td>
              <td>dosen.001</td>
              <td>dosen001@example.id</td>
              <td>$argon2id$LL33MM...</td>
              <td>Dosen Mata Kuliah</td>
              <td>0</td>
              <td>2025-07-20 14:00:00</td>
              <td></td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>

            <tr>
              <td>106</td>
              <td>mahasiswa22</td>
              <td>mhs22@example.id</td>
              <td>$argon2id$PP55QQ...</td>
              <td>Mahasiswa UII</td>
              <td>1</td>
              <td>2025-11-21 11:00:00</td>
              <td>2025-11-27 22:33:00</td>
              <td>
<button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEditAkun">✏️</button>
<button class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalHapusAkun">🗑️</button>
</td>
            </tr>
                </tbody>
      </table>


    </div>
  </div>            
</div>
<!-- /.card -->



        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- /.content-wrapper -->



<?php include "4footer.php"; ?>
<?php include "5script.php"; ?>