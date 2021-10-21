<h1 class="h1 border-bottom">Transaksi Peminjaman</h1>
<div id="content">
	<a href="index.php?p=transaksi-peminjaman-input" class="btn btn-secondary text-white">Transaksi Baru</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th id="label-tampil-no">No</td>
				<th>ID Transaksi</th>
				<th>ID Anggota</th>
				<th>Nama</th>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Tanggal Pinjam</th>
				<th id="label-opsi3">Opsi</th>
			</tr>
		</thead>
		<?php
		$sql="SELECT tbtransaksi.*,tbanggota.*,tbbuku.*
		FROM tbtransaksi,tbanggota,tbbuku
		WHERE tbtransaksi.idanggota=tbanggota.idanggota
		AND tbtransaksi.idbuku=tbbuku.idbuku
		ORDER BY tbtransaksi.idtransaksi DESC";
		
		$q_transaksi = mysqli_query($db, $sql);

		$nomor=1;
		while($r_transaksi=mysqli_fetch_array($q_transaksi)){
		?>
		<tr>
			<td class="align-middle"><?php echo $nomor++; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['idtransaksi']; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['idanggota']; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['nama']; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['idbuku']; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['judulbuku']; ?></td>
			<td class="align-middle"><?php echo $r_transaksi['tglpinjam']; ?></td>
			<td class="align-middle">
				<a href="index.php?p=transaksi-peminjaman-edit&id=<?php echo $r_transaksi['idtransaksi'];?>" class="btn btn-primary">Edit</a>
				<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusTransaksi">Hapus</button>
				<div class="modal fade" id="hapusTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Pengembalian Pinjaman</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Anda yakin ingin menghapus transaksi <?php echo $r_transaksi['idtransaksi']; ?>?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<a href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi'];?>" class="btn btn-danger">Hapus</a>
						</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>