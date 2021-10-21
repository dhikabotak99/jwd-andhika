<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<h1 class="h1 border-bottom">Edit Data Buku</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/buku-edit-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_buku" class="form-label">ID Buku</label>
				<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly>
			</div>

			<div class="col-12">
				<label for="judul_buku" class="form-label">Judul Buku</label>
				<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>" required>
			</div>

			<div class="col-12">
				<label for="kategori" class="form-label">Kategori</label>
				<input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>" required>
			</div>

			<div class="col-12">
				<label for="pengarang" class="form-label">Pengarang</label>
				<input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" required>
			</div>

			<div class="col-12">
				<label for="penerbit" class="form-label">Penerbit</label>
				<input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>