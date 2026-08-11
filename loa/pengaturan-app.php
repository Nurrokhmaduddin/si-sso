<?php $page = 'pengaturan_app'; ?>
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
          Modul Pengaturan digunakan untuk mengelola preferensi dan konfigurasi umum sistem yang bersifat teknis maupun administratif. Pengaturan pada modul ini tidak secara langsung memengaruhi proses bisnis inti dari sistem informasi, melainkan mendukung aspek operasional dan tata kelola aplikasi secara keseluruhan.

Perubahan pada modul ini umumnya berkaitan dengan pengaturan lingkungan aplikasi, preferensi penggunaan, atau parameter sistem yang menunjang jalannya aplikasi. Penyesuaian tersebut bertujuan untuk memastikan aplikasi berjalan sesuai kebutuhan organisasi tanpa mengubah alur utama proses bisnis yang telah ditetapkan.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php include('4footer.php'); ?>
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

<?php include('5script.php'); ?>