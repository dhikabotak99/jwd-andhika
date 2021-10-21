<!-- AUTO INCREMENT ID ANGGOTA -->
<?php include "koneksi.php";
	$sql = mysqli_query($db, "select max(idanggota) as maxID from tbanggota");
	$data = mysqli_fetch_array($sql);

	$kode = $data['maxID'];
	$kode++;
?>
<h1 class="h1 border-bottom">Input Data Anggota</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/anggota-input-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_anggota" class="form-label">ID Anggota</label>
				<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $kode;?>" readonly required>
				
			</div>

			<div class="col-12">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama" required>
			</div>

			<div class="col-12">
				<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-select" required>
					<option value="" select="selected">~ Jenis Kelamin ~</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</div>

			<div class="col-12">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>