<html>

<head>
	<title>Jadwal Sholat</title>
</head>

<body>
	<?php $this->load->view('n/hd.php') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
					<br>
					<div class="form-group">
						<a href='<?php echo base_url("j/tambah/"); ?>'>
							<button type="button" class="btn btn-primary"> Tambah Data Jadwal </button>
						</a>
					</div>
					<div>
						<table cellpadding="10" class="table">
							<tr>
								<th>#</th>
								<th>Tanggal</th>
								<th>Subuh</th>
								<th>Dzuhur</th>
								<th>Ashar</th>
								<th>Magrib</th>
								<th>Isya</th>
								<th colspan="2">Aksi</th>
							</tr>
							<?php
						if(!empty($j)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
							foreach($j as $data){
								echo "<tr>
								<td>".$data->id."</td>
								<td>".$data->tgl."</td>
								<td>".$data->sbh."</td>
								<td>".$data->dzh."</td>
								<td>".$data->ash."</td>
								<td>".$data->mgr."</td>
								<td>".$data->isy."</td>

								<td>
								
								<a href='".base_url("j/ubah/".$data->id)."'>
								Ubah
								</a>
								
								</td>

								<td>
								
								<a href='".base_url("j/hapus/".$data->id)."'>
								
								Hapus
								
								</a>
								
								</td>
								</tr>";
							}
						}else{ // Jika data siswa kosong
							echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
</body>

</html>