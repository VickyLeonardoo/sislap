<?php 
require '../koneksi.php';
$no=$_GET['no']; 

$sql=mysqli_query($conn,"DELETE FROM pengaduan where no='$no' ");

if ($sql) 
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='page_admin.php?url=laporan_menunggu';
</script>
<?php
}
?>