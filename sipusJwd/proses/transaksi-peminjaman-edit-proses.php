<?php
include '../koneksi.php';

$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tglpinjam=$_POST['tglpinjam'];
$tglkembali=$_POST['tglkembali'];

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET idanggota='$id_anggota',idbuku='$id_buku',tglpinjam='$tglpinjam',tglkembali='$tglkembali'
		WHERE idtransaksi='$id_transaksi'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>