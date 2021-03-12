<html>

<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>"> </head>

<body>
	<?php $this->load->view('n/hd.php') ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3>Form Tambah Jadwal Sholat</h3>
					<hr>
					<!-- Menampilkan Error jika validasi tidak valid -->
					<div style="color: red;">
						<?php echo validation_errors(); ?>
					</div>
					<?php echo form_open("j/tambah/"); ?>
						<table class="table" cellpadding="10">
							<tr>
								<td>ID Jadwal</td>
								<td>
									<input type="text" name="inid" value="<?php echo set_value('inid'); ?>">
								</td>
							</tr>
							<tr>
								<td>Tanggal</td>
								<td>
									<input type="date" name="intgl" value="<?php echo set_value('intgl'); ?>">
								</td>
							</tr>
							<tr>
								<td>Subuh</td>
								<td>
									<input type="time" name="insbh" value="<?php echo set_value('insbh'); ?>">
								</td>
							</tr>
							<tr>
								<td>Dzuhur</td>
								<td>
									<input type="time" name="indzh" value="<?php echo set_value('indzh'); ?>">
								</td>
							</tr>
							<tr>
								<td>Ashar</td>
								<td>
									<input type="time" name="inash" value="<?php echo set_value('inash'); ?>">
								</td>
							</tr>
							<tr>
								<td>Magrib</td>
								<td>
									<input type="time" name="inmgr" value="<?php echo set_value('inmgr'); ?>">
								</td>
							</tr>
							<tr>
								<td>Isya</td>
								<td>
									<input type="time" name="inisy" value="<?php echo set_value('inisy'); ?>">
								</td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit" value="Simpan">
						<a href="<?php echo base_url('j/index/'); ?>">
							<input type="button" value="Batal">
						</a>
						<?php echo form_close(); ?>
				</div>
			</div>
		</div>
</body>

</html>