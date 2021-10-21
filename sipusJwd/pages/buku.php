<h1 class="h1 border-bottom">Tampil Data Buku</h1>
<div id="content">
	<a class="btn btn-secondary text-white" href="index.php?p=buku-input">Tambah Data Buku</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th id="label-tampil-no">No</td>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Kategori</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th id="label-opsi2">Opsi</th>
			</tr>
		</thead>
		<?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td class="align-middle"><?php echo $nomor++; ?></td>
			<td class="align-middle"><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_buku['kategori']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="btn btn-primary">Edit</a>
				<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusBuku">Hapus</button>
				<div class="modal fade" id="hapusBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Hapus Buku</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Anda yakin ingin menghapus data buku <?php echo $r_tampil_buku['idbuku']; ?>?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="btn btn-danger"">Hapus</a>
						</div>
						</div>
					</div>
				</div>
				
			</td>
		</tr>
		<?php } ?>
	</table>
</div>