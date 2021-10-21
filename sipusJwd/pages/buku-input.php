<h1 class="h1 border-bottom">Input Data Buku</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/buku-input-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_buku" class="form-label">ID Buku</label>
					<?php include "koneksi.php";
						$sql = mysqli_query($db, "select max(idbuku) as maxID from tbbuku");
						$data = mysqli_fetch_array($sql);

						$kode = $data['maxID'];
						$kode++;
					?>
				<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $kode;?>" readonly required>
			</div>

			<div class="col-12">
				<label for="judul_buku" class="form-label">Judul Buku</label>
				<input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Input Judul Buku" required>
			</div>

			<div class="col-12">
				<label for="Kategori" class="form-label">Kategori</label>
				<select name="kategori" class="form-select" required>
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
			</div>

			<div class="col-12">
				<label for="pengarang" class="form-label">Pengarang</label>
				<input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Input Nama Pengarang" required>
			</div>

			<div class="col-12">
				<label for="penerbit" class="form-label">Penerbit</label>
				<input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Input Penerbit" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>