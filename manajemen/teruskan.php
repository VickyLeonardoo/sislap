<?php 
require '../koneksi.php';
$no=$_POST['no'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$judul=$_POST['judul'];
$lokasi=$_POST['lokasi'];
$isi=$_POST['isi'];
$unit=$_POST['unit'];
$id=$_POST['id_user'];
$inv=$_POST['inves'];

$sql=mysqli_query($conn,"UPDATE pengaduan SET status='teruskan',unit='$unit',investigasi='$inv' where no='$no'");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='laporan_menunggu.php?url=laporan_masuk';
</script>
<?php
}
?>

