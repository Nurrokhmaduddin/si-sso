<?php 
$page = 'coa';
include('1header.php'); 
include('2navbar.php'); 
include('3sidebar.php'); 

// Koneksi ke database
$host = "localhost"; // ganti sesuai host
$user = "root";      // ganti sesuai username DB
$pass = "";          // ganti sesuai password DB
$db   = "si_dagang";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data COA
$sql = "SELECT * FROM coa ORDER BY kode_akun ASC";
$result = $conn->query($sql);
?>

<!-- Content Wrapper -->
<div class="content-wrapper" style="min-height: 600px;">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <h3 class="mb-0">Chart of Accounts (COA)</h3>
            <p class="text-muted mb-0">Daftar akun beserta kode, jenis, kelompok, dan saldo normal.</p>
        </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- CARD TABEL COA -->
        <div class="card">
        	<div class="card-header">
        		<h5 class="card-title mb-0"><i class="fas fa-table me-2"></i> Tabel COA</h5>
        	</div>
        	<div class="card-body">
        		<div class="table-responsive">
        			<table id="coa_table" class="table table-bordered table-striped table-sm datatables1">
        				<thead>
        					<tr>
        						<th>ID</th>
        						<th>Kode Akun</th>
        						<th>Nama Akun</th>
        						<th>Jenis Akun</th>
        						<th>Kelompok Akun</th>
        						<th>Saldo Normal</th>
        						<th>Deskripsi</th>
        						<th>Parent ID</th>
        						<th>Aktif</th>
        					</tr>
        				</thead>
        				<tbody>
        					<?php if ($result->num_rows > 0) {
        						while($row = $result->fetch_assoc()) { ?>
        							<tr>
        								<td><?php echo $row['coa_id']; ?></td>
        								<td><?php echo $row['kode_akun']; ?></td>
        								<td><?php echo $row['nama_akun']; ?></td>
        								<td><?php echo $row['jenis_akun']; ?></td>
        								<td><?php echo $row['kelompok_akun']; ?></td>
        								<td><?php echo $row['saldo_normal']; ?></td>
        								<td><?php echo $row['deskripsi']; ?></td>
        								<td><?php echo $row['parent_id']; ?></td>
        								<td><?php echo $row['aktif'] ? 'Ya' : 'Tidak'; ?></td>
        							</tr>
        					<?php } } else { ?>
        						<tr>
        							<td colspan="9" class="text-center">Tidak ada data COA</td>
        						</tr>
        					<?php } ?>
        				</tbody>
        			</table>
        		</div>
        	</div>
        </div>

      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php 
$conn->close();
include('4footer.php'); 
?>

<!-- Script DataTables -->
<script>
$(document).ready(function () {
    $('#coa_table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});
</script>
