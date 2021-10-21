<?php
	$id_transaksi=$_GET['id'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);

?>
<h1 class="h1 border-bottom">Edit Transaksi Peminjaman</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/transaksi-peminjaman-edit-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_transaksi" class="form-label">ID Transaksi</label>
				<input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" readonly>
			</div>

			<div class="col-12">
				<label for="id_anggota" class="form-label">ID Anggota</label>
				<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" required>
			</div>
			
            <div class="col-12">
				<label for="id_buku" class="form-label">ID Buku</label>
				<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $r_tampil_transaksi['idbuku']; ?>" required>
			</div>

			<div class="col-12">
				<label for="tglpinjam" class="form-label">Tanggal Pinjam</label>
				<input type="date" class="form-control" id="tglpinjam" name="tglpinjam" value="<?php echo $r_tampil_transaksi['tglpinjam']; ?>" required>
			</div>

			<div class="col-12">
				<label for="tglkembali" class="form-label">Tanggal Kembali</label>
				<input type="date" class="form-control" id="tglkembali" name="tglkembali" value="<?php echo $r_tampil_transaksi['tglkembali']; ?>" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>