<h1 class="h1 border-bottom">Tampil Data Anggota</h1>
<div id="content">
	<a class="btn btn-secondary text-white" href="index.php?p=anggota-input">Tambah Anggota</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th id="label-tampil-no">No</td>
				<th>ID Anggota</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th id="label-opsi">Opsi</th>
			</tr>
		</thead>
		<?php
		$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			
		?>
		<tr>
			<td class="align-middle"><?php echo $nomor++; ?></td>
			<td class="align-middle"><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_anggota['nama']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td class="align-middle"><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td class="align-middle">
				<a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="btn btn-primary">Edit</a>
				<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
				<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Hapus Anggota</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<p>Anda yakin ingin menghapus data anggota <?php echo $r_tampil_anggota['idanggota'];?>?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<a href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="btn btn-danger">Hapus</a>
						</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>