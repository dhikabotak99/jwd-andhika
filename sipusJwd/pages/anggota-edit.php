<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<h1 class="h1 border-bottom">Edit Data Anggota</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/anggota-edit-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_anggota" class="form-label">ID Anggota</label>
				<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly>
			</div>

			<div class="col-12">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" required>
			</div>

			<div class="col-12">
				<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-select" required>
					<option value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" select="selected"><?php echo $r_tampil_anggota['jeniskelamin']; ?></option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</div>

			<div class="col-12">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $r_tampil_anggota['alamat']; ?>" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>