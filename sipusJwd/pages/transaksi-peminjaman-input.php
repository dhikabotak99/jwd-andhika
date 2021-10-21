<h1 class="h1 border-bottom">Input Transaksi Peminjaman</h1>
<div class="col-md-7 col-lg-8">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<div class="row g-3">
			<div class="col-12">
				<label for="id_transaksi" class="form-label">ID Transaksi</label>
					<?php include "koneksi.php";
						$sql = mysqli_query($db, "select max(idtransaksi) as maxID from tbtransaksi");
						$data = mysqli_fetch_array($sql);

						$kode = $data['maxID'];
						$kode++;
					?>
				<input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $kode;?>" readonly required>
			</div>

			<div class="col-12">
				<label for="Anggota" class="form-label">Anggota</label>
				<select name="id_anggota" class="form-select" required>
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</div>

			<div class="col-12">
				<label for="buku" class="form-label">Buku</label>
				<select name="id_buku" class="form-select" required>
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
			</div>

			<div class="col-12">
				<label for="tangga;_pinjam" class="form-label">Tanggal Pinjam</label>
				<input type="date" class="form-control" id="pengarang" name="tgl_pinjam" required>
			</div>

			<div class="col-12 text-center">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			</div>
		</div>
	</form>
</div>