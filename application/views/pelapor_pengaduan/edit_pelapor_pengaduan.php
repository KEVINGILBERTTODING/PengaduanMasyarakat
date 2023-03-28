<?php if (validation_errors()): ?>
  <div class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false" style="z-index: 999999; position: fixed; right: 1.5rem; bottom: 3.5rem">
    <div class="toast-header">
      <strong class="mr-auto">Gagal!</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?= validation_errors(); ?>
    </div>
  </div>
<?php endif ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 p-3">
			<div class="card">
				<div class="card-header">
					<h3 class="my-auto"><i class="fas fa-fw fa-edit"></i> Ubah Pengaduan</h3>
				</div>
			  	<div class="card-body">
					<form action="<?= base_url('pelaporPengaduan/editPelaporPengaduan/' . $pengaduan['id_pengaduan']); ?>" method="post" enctype="multipart/form-data">
						<small class="text-danger">Perhatian! Jika anda mengubah pengaduan maka, tanggal pengaduan akan berubah</small>
			  		<div class="form-group">
							<label for="isi_laporan">Isi Laporan</label>
							<textarea id="isi_laporan" class="form-control <?= (form_error('isi_laporan')) ? 'is-invalid' : ''; ?>" name="isi_laporan" required><?= (form_error('isi_laporan')) ? set_value('isi_laporan') : $pengaduan['isi_laporan']; ?></textarea>
							<div class="invalid-feedback">
	              <?= form_error('isi_laporan'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="jenis">jenis</label>
							<text id="jenis" class="form-control <?= (form_error('jenis')) ? 'is-invalid' : ''; ?>" name="jenis" required><?= (form_error('jenis')) ? set_value('jenis') : $pengaduan['jenis']; ?></text>
							<div class="invalid-feedback">
	              <?= form_error('jenis'); ?>
	            </div>
						</div>
						<div class="form-group">
							<label for="form_kecamatan">Kecamatan</label>
							<select class="form-control" id="form_kecamatan">
								<?php 
									$getKecamatanByIdFromKelurahan = $this->db->get_where('kecamatan', ['id_kecamatan' => $pengaduan['id_kecamatan']])->row_array();
								?>
								<option value="<?= $getKecamatanByIdFromKelurahan['id_kecamatan']; ?>"><?= $getKecamatanByIdFromKelurahan['kecamatan']; ?></option>
								<?php foreach ($kecamatan as $dataKecamatan): ?>
									<?php if ($dataKecamatan['id_kecamatan'] != $getKecamatanByIdFromKelurahan['id_kecamatan']): ?>
										<option value="<?= $dataKecamatan['id_kecamatan']; ?>"><?= $dataKecamatan['kecamatan']; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="form_kelurahan">Kelurahan</label>
							<select id="form_kelurahan" class="form-control" name="id_kelurahan">
								<?php 
									$getKelurahanByIdKecamatan = $this->db->get_where('kelurahan', ['id_kecamatan' => $dataKecamatan['id_kecamatan']])->result_array();
								?>
								<option value="<?= $pengaduan['id_kelurahan']; ?>"><?= $pengaduan['kelurahan']; ?></option>
								<?php foreach ($getKelurahanByIdKecamatan as $dataKelurahan): ?>
									<?php if ($dataKelurahan['id_kelurahan'] != $pengaduan['id_kelurahan']): ?>
										<option value="<?= $dataKelurahan['id_kelurahan']; ?>"><?= $dataKelurahan['kelurahan']; ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="foto">Foto 1</label> <br>
							<a href="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto']; ?>" class="enlarge" id="check_enlarge_photo">
								<img class="img-fluid rounded img-w-150 border border-dark" id="check_photo" src="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto']; ?>" alt="<?= $pengaduan['foto']; ?>">
							</a>
							<br>
						</div>
						<div class="form-group">
							<label for="foto1">Foto 2</label> <br>
							<a href="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto1']; ?>" class="enlarge" id="check_enlarge_photo">
								<img class="img-fluid rounded img-w-150 border border-dark" id="check_photo" src="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto1']; ?>" alt="<?= $pengaduan['foto1']; ?>">
							</a>
							<br>
						</div>
						<div class="form-group">
							<label for="foto2">Foto 3</label> <br>
							<a href="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto2']; ?>" class="enlarge" id="check_enlarge_photo">
								<img class="img-fluid rounded img-w-150 border border-dark" id="check_photo" src="<?= base_url('assets/img/img_pengaduan/') . $pengaduan['foto2']; ?>" alt="<?= $pengaduan['foto2']; ?>">
							</a>
							<br>
						</div>
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text">Upload Foto</span>
						  </div>
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="foto" aria-describedby="foto" id="foto" name="foto">
						    <label class="custom-file-label" for="foto">Pilih file 1</label>
						  </div>
						</div>
						<div class="input-group mb-3">
						<div class="custom-file">
						    <input type="file" class="custom-file-input" id="foto1" aria-describedby="foto1" id="foto1" name="foto1">
						    <label class="custom-file-label" for="foto1">Pilih file 2</label>
						  </div>
						</div>
						<div class="input-group mb-3">
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="foto2" aria-describedby="foto2" id="foto2" name="foto2">
						    <label class="custom-file-label" for="foto2">Pilih file 3</label>
						  </div>
						</div>
						<div class="form-group text-right">
							<button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
