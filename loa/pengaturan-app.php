<?php $page = 'konfigurasi_app'; ?>
<?php include('1header.php'); ?>
<?php include('2navbar.php'); ?>
<?php include('3sidebar.php'); ?>
  



  <div class="content-wrapper" style="min-height: 521px;">
        	<section class="content-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h4>
						Pengaturan					</h4>
				</div>
			</div>
		</div>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Main row -->
			<div class="row">
				<div class="col-md-9">
					<div class="card card-success card-outline card-outline-tabs">
						<div class="card-header p-0 border-bottom-0">
							<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="https://pengaturan.simtekim-uii.id/pengaturan#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">General</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="https://pengaturan.simtekim-uii.id/pengaturan#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Slider</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="custom-tabs-four-tabContent">
								<!-- general -->
								<div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
									<div class="callout callout-info">
  <b>Note:</b> Kolom dengan bintang merah ( <b class="text-red">*</b> ) wajib diisi!</div>									<br>
									<form action="https://pengaturan.simtekim-uii.id/pengaturan/edit_pengaturan_proses" method="POST" class="form-inputdata myForm" enctype="multipart/form-data">
										<input type="hidden" name="logo_aplikasi_lama" value="23030214221195.png">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Aplikasi <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="nama_aplikasi" class="form-control" placeholder="..." value="SIMTEKIM" required="" fdprocessedid="n7g0ku">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Copyright <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="copyright" class="form-control" placeholder="..." value="Prodi Teknik Kimia Fakultas Teknologi Industri" required="" fdprocessedid="drf0q5">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title Login <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="title_login" class="form-control" placeholder="..." value="SISTEM INFORMASI TEKNIK KIMIA" required="" fdprocessedid="qri3hn">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Instansi <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="instansi" class="form-control" placeholder="..." value="UNIVERSITAS ISLAM INDONESIA" required="" fdprocessedid="kxog4">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Fakultas <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="fakultas" class="form-control" placeholder="..." value="FAKULTAS TEKNOLOGI INDUSTRI" required="" fdprocessedid="wr4dfj">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Program Studi <b class="text-danger">*</b></label>
											<div class="col-sm-10">
												<input type="text" name="program_studi" class="form-control" placeholder="..." value="TEKNIK KIMIA" required="" fdprocessedid="gnfzcr">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Logo Aplikasi</label>
											<div class="col-sm-10">
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="logo_aplikasi" onchange="getFileData(this)" id="exampleInputFile">
														<label class="custom-file-label" id="nmFileTerpilih" for="exampleInputFile">Choose file</label>
													</div>
												</div>
												<small style="font-weight: none;">(Pilih untuk mengganti. Max 2 MB, .jpg, .jpeg, .png)</small>
											</div>
										</div>
										<div class="form-group row">
											<div class="offset-sm-2 col-sm-10">
												<button type="submit" id="btn-submit" class="btn btn-success" fdprocessedid="el46tc">Simpan Data</button>
											</div>
										</div>
									</form>
								</div>
								<!-- slider -->
								<div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
									<form action="https://pengaturan.simtekim-uii.id/pengaturan/tambah_slider_login" method="POST" class="form-inputdata myForm" enctype="multipart/form-data">
										<table width="100%">
											<tbody><tr>
												<td>
													<div class="input-group">
														<div class="custom-file">
															<input type="file" class="custom-file-input" name="slider" onchange="getFileData_slider(this)" id="exampleInputFile_slider">
															<label class="custom-file-label" id="nmFileTerpilih_slider" for="exampleInputFile_slider">Choose file</label>
														</div>
													</div>
													<center>
														<img id="blah_slider" src="https://pengaturan.simtekim-uii.id/pengaturan#" alt="" style="width: 100%; margin-top: 10px;">
													</center>
												</td>
												<td valign="top">
													<button type="submit" id="btn-submit" class="btn btn-info">Simpan Data</button>
												</td>
											</tr>
										</tbody></table>
									</form>
									<hr>
									<div class="row">
																					<div class="col-6 col-md-4">
												<div class="card">
													<div class="card-body p-0">
														<img src="./PENGATURAN - SIMTEKIM_files/23030214251008.png" width="100%">
														<br>
														<table width="100%">
															<tbody><tr>
																<td>
																	<button type="button" class="btn btn-sm btn-danger" onclick="hapus_slider_login(&#39;14&#39;)" style="margin: 10px; margin-left: 10px;"><i class="fas fa-trash"></i></button>
																</td>
																<td align="right">
																	<input type="hidden" class="status-14" value="Publish">
																	<div class="custom-control custom-switch" style="margin-right: 10px;">
																		<input type="checkbox" onclick="status_slider(&#39;14&#39;, &#39;Publish&#39;)" checked="" class="custom-control-input" id="customSwitch14">
																		<label class="custom-control-label" for="customSwitch14">
																			<f class="lb-publish14">Publish</f>
																			<f class="lb-unpublish14" style="display: none;">Unpublish</f>
																			<f class="lb-loading14" style="display: none;"><i class="fas fa-spinner fa-pulse"></i></f>
																		</label>
																	</div>
																</td>
															</tr>
														</tbody></table>
													</div>
												</div>
											</div>
																			</div>
								</div>
							</div>
						</div>
						<!-- /.card -->
					</div>
				</div>		
				<div class="col-md-3">
					<div class="card card-secondary card-outline">
						<div class="card-body">
							<center>
								<img class="blah_logo" src="./PENGATURAN - SIMTEKIM_files/23030214221195.png" style="width: 80%;">
							</center>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</section>
	<script>
		function hapus_slider_login(id){
			$('#mdBd').hide();
			$('#mdLd').show();
			$('#modalShow').modal({backdrop: 'static', keyboard: true});
			$('#mdBd').load('https://pengaturan.simtekim-uii.id/pengaturan/modal_hapus_slider_login/'+id);
		}

		function status_slider(id){
			var status = $('.status-'+id).val();

			if(status == 'Publish'){
				sts = 'Unpublish';
			}
			else{
				sts = 'Publish';
			}

			$.ajax({
				url: "https://pengaturan.simtekim-uii.id/pengaturan/edit_status_slider",
				type: "POST",
				dataType: "html",
				data: { id:id, sts:sts },
				beforeSend: function () {
					$('.lb-publish'+id).hide();
					$('.lb-unpublish'+id).hide();
					$('.lb-loading'+id).show();
					$('#customSwitch'+id).prop('disabled', true)
				},
				complete: function () {
					$('.lb-loading'+id).hide();
					$('#customSwitch'+id).prop('disabled', false)
				},
				success: function(result){
					resp = JSON.parse(result);

					if(resp['status'] == 'success'){
						if(sts == 'Publish'){
							$('.lb-publish'+id).show();
							$('.lb-unpublish'+id).hide();
						}
						else{
							$('.lb-publish'+id).hide();
							$('.lb-unpublish'+id).show();
						}

						swal({
							title: "Berhasil",
							text: 'Data berhasil disimpan',
							icon: "success",
						});
					}
					else{
						swal({
							title: "Gagal",
							text: 'Gagal, silahkan coba lagi',
							icon: "warning",
						});
					}
				}
			});

			$('.status-'+id).val(sts);
		}

		function getFileData(input) {
			if (input.files && input.files[0]) {

				var link = document.querySelector("link[rel~='icon']");
				if (!link) {
						link = document.createElement('link');
						link.rel = 'icon';
						document.getElementsByTagName('head')[0].appendChild(link);
				}

				var reader = new FileReader();
				reader.onload = function (e) {
						$('.blah_logo').attr('src', e.target.result);
						link.href = e.target.result;
				}
				reader.readAsDataURL(input.files[0]);

				var file = input.files[0];
				var name = file.name;
				$('#nmFileTerpilih').text(name);

				
			}
		}

		function getFileData_slider(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
						$('#blah_slider').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);

				var file = input.files[0];
				var name = file.name;
				$('#nmFileTerpilih_slider').text(name);
			}
		}

			</script>


	  </div>


  <!-- modal -->
  <div id="konten_modal"></div>
  <div id="modalShow" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="mdDialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div id="mdLd">
          <center>
            <br>
            <b style="font-size: 50pt;"><i class="fas fa-spinner fa-pulse text-success"></i></b>
            <br>
            <br>
            <h2><b class="text-gray">Mohon Tunggu</b></h2>
            <h5 class="text-gray">Loading...</h5>
            <br>
            <hr>
            <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Tutup</button>
            <br>
            <br>
          </center>
        </div>
        <div id="mdBd">
          
        </div>
      </div>
    </div>
  </div>
  <!-- end -->


  <footer class="main-footer" style="font-size: 10pt; background-color: #e5eaf0;">
    <center>
      <font color="#000000">
        SIMTEKIM | Copyright © 
        Prodi Teknik Kimia Fakultas Teknologi Industri      </font>
    </center>
  </footer>
<div id="sidebar-overlay"></div></div>

<!-- load -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./PENGATURAN - SIMTEKIM_files/bootstrap.bundle.min.js.download"></script>
<!-- ChartJS -->
<script src="./PENGATURAN - SIMTEKIM_files/Chart.min.js.download"></script>
<!-- JQVMap -->
<script src="./PENGATURAN - SIMTEKIM_files/jquery.vmap.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/jquery.vmap.usa.js.download"></script>
<!-- jQuery Knob Chart -->
<script src="./PENGATURAN - SIMTEKIM_files/jquery.knob.min.js.download"></script>
<!-- daterangepicker -->
<script src="./PENGATURAN - SIMTEKIM_files/moment.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/daterangepicker.js.download"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./PENGATURAN - SIMTEKIM_files/tempusdominus-bootstrap-4.min.js.download"></script>
<!-- Summernote -->
<script src="./PENGATURAN - SIMTEKIM_files/summernote-bs4.min.js.download"></script>
<!-- overlayScrollbars -->
<script src="./PENGATURAN - SIMTEKIM_files/jquery.overlayScrollbars.min.js.download"></script>
<!-- AdminLTE App -->
<script src="./PENGATURAN - SIMTEKIM_files/adminlte.js.download"></script>
<!-- DataTables  & Plugins -->
<script src="./PENGATURAN - SIMTEKIM_files/jquery.dataTables.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/dataTables.bootstrap4.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/dataTables.responsive.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/responsive.bootstrap4.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/dataTables.buttons.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/buttons.bootstrap4.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/jszip.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/pdfmake.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/vfs_fonts.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/buttons.html5.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/buttons.print.min.js.download"></script>
<script src="./PENGATURAN - SIMTEKIM_files/buttons.colVis.min.js.download"></script>
<!-- Select2 -->
<script src="./PENGATURAN - SIMTEKIM_files/select2.full.min.js.download"></script>
<!-- Bootstrap Switch -->
<script src="./PENGATURAN - SIMTEKIM_files/bootstrap-switch.min.js.download"></script>
<!-- wiris ckeditor -->
<script src="./PENGATURAN - SIMTEKIM_files/tinymce.min.js.download" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="./PENGATURAN - SIMTEKIM_files/bootstrap-timepicker.min.js.download"></script>
<!-- sweetalert -->
<script src="./PENGATURAN - SIMTEKIM_files/sweetalert.min.js.download"></script>
<!-- bootstrap datepicker -->
<script src="./PENGATURAN - SIMTEKIM_files/bootstrap-datepicker.min.js.download"></script>
<!-- bootstrap color picker -->
<script src="./PENGATURAN - SIMTEKIM_files/bootstrap-colorpicker.min.js.download"></script><script type="text/javascript">
  // window.onload = function () { alert("It's loaded!") }
  function ganti_password(){
    $('.btn-disabled').prop('disabled', true);
    $('.icon-profil').hide();
    $('.icon-ldprofil').show();

    $('#konten_modal').load('https://pengaturan.simtekim-uii.id/warga/mo_ganti_password');
  }

	//Date picker
  $('.datepicker').datepicker({
    autoclose: true,
    locale:'id',
    format: "dd MM yyyy"
  })

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

  //Colorpicker
  $('.colorpicker').colorpicker()

  tinymce.init({
    selector: '#txtid',
 
    plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste tiny_mce_wiris"
    ],

    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry tiny_mce_wiris_CAS",    
    relative_urls: false
      
  });

  $(function () {
    $(".example1").DataTable();
    $('.example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "pageLength": 100000000,
      "autoWidth": false,
      "dom": '<"pull-left"f><"pull-right"l>tip',
    });
  });

  $(document).ready(function()
  {
    // alert success
    
    // alert danger
      });

  function rupiahkan(rupiah,id){
    $('#'+id).val(convertRupiah(rupiah));
    return isNumberKey(rupiahkan);
  }
  
  function convertRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
      split  = number_string.split(","),
      sisa   = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
      separator = sisa ? "." : "";
      rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
  }

  function isNumberKey(evt) {
      key = evt.which || evt.keyCode;
    if (  key != 188 // Comma
       && key != 8 // Backspace
       && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
       && (key < 48 || key > 57) // Non digit
      ) 
    {
      evt.preventDefault();
      return;
    }
  }

  function formatRupiah(angka, prefix){
    var number_string = angka.toString(),
    split       = number_string.split(','),
    sisa        = split[0].length % 3,
    rupiah      = split[0].substr(0, sisa),
    ribuan      = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
  }

  function tanggal_indo(tgl){
    var tanggal = tgl.substring(8, 10);
    var bulan   = tgl.substring(5, 7);
    var tahun   = tgl.substring(0, 4);

    if(bulan == '01'){
      bulan = 'Januari'
    }
    else if(bulan == '02'){
      bulan = 'Februari'
    }
    else if(bulan == '03'){
      bulan = 'Maret'
    }
    else if(bulan == '04'){
      bulan = 'April'
    }
    else if(bulan == '05'){
      bulan = 'Mei'
    }
    else if(bulan == '06'){
      bulan = 'Juni'
    }
    else if(bulan == '07'){
      bulan = 'Juli'
    }
    else if(bulan == '08'){
      bulan = 'Agustus'
    }
    else if(bulan == '09'){
      bulan = 'September'
    }
    else if(bulan == '10'){
      bulan = 'Oktober'
    }
    else if(bulan == '11'){
      bulan = 'Nopember'
    }
    else if(bulan == '12'){
      bulan = 'Desembar'
    }

    return tanggal+' '+bulan+' '+tahun;
  }

  function hari_indonesia(hari){
    if(hari == 'Mon'){
      x = 'Senin'
    }
    else if(hari == 'Tue'){
      x = 'Selasa'
    }
    else if(hari == 'Wed'){
      x = 'Rabu'
    }
    else if(hari == 'Thu'){
      x = 'Kamis'
    }
    else if(hari == 'Fri'){
      x = 'Jumat'
    }
    else if(hari == 'Sat'){
      x = 'Sabtu'
    }
    else if(hari == 'Sun'){
      x = 'Minggu'
    }

    return x;
  }

  function tanggal_bulan_tahun(tgl, pemisah){
    var tanggal = tgl.substring(8, 10);
    var bulan   = tgl.substring(5, 7);
    var tahun   = tgl.substring(0, 4);

    return tanggal+pemisah+bulan+pemisah+tahun;
  }

  function jam_menit(jam, pemisah){
    var menit = jam.substring(3, 5);
    var jam   = jam.substring(0, 2);

    return jam+pemisah+menit;
  }

  function jam_menit_datetime(jam, pemisah){
    var menit = jam.substring(14, 16);
    var jam   = jam.substring(11, 13);

    return jam+pemisah+menit;
  }

  function ucwords (str) {
    return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
        return $1.toUpperCase();
    });
  }

  function download_file(x){
    return btoa(x).replace('=', '')
  }
</script><script>
	$('.myForm').on('submit', function (e) {
		e.preventDefault();
		var btnTxt = $('#btn-submit').text();
		var formData = new FormData(this);
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: formData,
			processData: false,
			contentType: false,
			chace: false,
			beforeSend: function () {
					$('#btn-submit').attr('disabled', 'disabled');
					$('#btn-submit').html('<i class="fas fa-spinner fa-spin"></i>');
			},
			complete: function () {
					// $('#btn-submit').removeAttr('disabled');
					$('#btn-submit').html(btnTxt);
			},
			success: function (response) {
				console.log(response);
				let resp = JSON.parse(response);
				if (resp['status'] == 'failed') {
					swal({
						title: "Gagal",
						text: resp['pesan'],
						icon: "warning",
					});
					$('#btn-submit').removeAttr('disabled');
				}

				if(resp['status'] == 'success') {
					swal({
						title: "Berhasil",
						text: resp['pesan'],
						icon: "success",
					});
					
					$('#btn-submit').prop('disabled', 'disabled');
					setTimeout(function() { 
						window.location.reload();
					}, 1200);
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
					console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		});
	});
</script><!-- end -->
<script defer="" src="./PENGATURAN - SIMTEKIM_files/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;50fc610f07ec40f7a8700ef5bc57df68&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>

<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>