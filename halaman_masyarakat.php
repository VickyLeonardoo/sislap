<?php 
if (isset($_GET['url'])) 
{
	$url = $_GET['url'];

	switch($url)
	{

        case 'masyarakat';
        include 'masyarakat.php';
        break;
        
		case 'laporan_menunggu';
		include 'laporan_pending.php';
		break;

		case 'laporan_diproses';
		include 'laporan_diproses.php';
		break;

        case 'laporan_selesai';
        include 'laporan_selesai.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'profile';
        include 'profile.php';
        break;

	}
}
 
     else
    {
        ?>
  
  <div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <form action="simpan_laporan.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group cols-sm-6">
                                        

                                    <div class="form-group cols-sm-6">
                                           
                                           <input type="hidden" class="form-control form-control-user" id="judul"
                                               name="id" value="<?php echo $_SESSION['id_user'];?>" readonly>
                                       </div>
                                   
                                       <div class="form-group cols-sm-6">
                                       
                                        <input type="hidden" class="form-control form-control-user" readonly value="<?php echo date('Y-m-d'); ?>" name="tgl_pengaduan">
                                        </div>

                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="nama" required value="<?php echo $_SESSION['nama'];?>" readonly>
                                      
                                        <div class="form-group cols-sm-6">
                                           
                                            <input type="hidden" class="form-control form-control-user" id="judul"
                                                name="nik" value="<?php echo $_SESSION['nik'];?>" readonly>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                        
                                        <input type="hidden" class="form-control form-control-user" readonly value="<?php echo date('Y-m-d'); ?>" name="tgl_tanggapan">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label for="">Judul Laporan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" required
                                                oninvalid="this.setCustomValidity('Masukkan Judul Laporan Anda')"
                                        oninput="this.setCustomValidity('')"/>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Lokasi Kejadian:</label>
                                            <select class="form-control" name="lokasi" required>
                                            <option value="" disabled>-Pilih-</option>
                                                <option value="Kampus">Kampus</option>
                                                <option value="Luar Kampus">Luar Kampus</option>
                                            </select>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Unit Tujuan:</label>
                                            <select class="form-control" name="unit" id="departemen">
                                                <option value="SBAK">SBAK</option>
                                                <option value="SBKK">SBKK</option>
                                                <option value="SBPK">SBPK</option>
                                                <option value="SBUM">SBUM</option>
                                                <option value="Jur Mesin">Jurusan Mesin</option>
                                                <option value="Jur Manajemen Bisnis">Jurusan Manajemen Bisnis</option>
                                                <option value="Jur Informatika">Jur Informatika</option>
                                                <option value="UPT PP">UPT-PP</option>
                                                <option value="UPT SI">UPT-SI</option>
                                                <option value="UPT Perpus">UPT-Perpus</option>
                                                <option value="UPT Pengadaan">UPT-Pengadaan</option>
                                                <option value="UPT PM">UPT-PM</option>
                                                <option value="P2M">P2M</option>
                                                <option value="SPI">SPI</option>
                                                <option value="MKU">MKU</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="form-group cols-sm-6">
                                            <label>Isi Laporan:</label>
                                            <textarea class="form-control" rows="7" name="isi" required
                                            oninvalid="this.setCustomValidity('Masukkan Isi Laporan')"
                                        oninput="this.setCustomValidity('')"/></textarea>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Upload Foto</label>
                                            <input type="file" required name="foto" value="" class="form-control" id="files"
                                                accept=".jpg, .jpeg, .png, .gif" 
                                                oninvalid="this.setCustomValidity('Masukkan Bukti Foto')"
                                        oninput="this.setCustomValidity('')"/>
                                    
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Kejadian:</label>
                                            <input type="date" class="form-control form-control-user" id="tgl_kejadian"
                                                name="tgl_kejadian" placeholder="Judul Laporan" required 
                                                oninvalid="this.setCustomValidity('Masukkan Tanggal Kejadian')"
                                        oninput="this.setCustomValidity('')"/>
                                        </div>

                                        
                                        <div style="justify-content: center; align-items: center;" class="text-center">
                                            <input type="submit" value="Kirim" name="" class="btn-primary"
                                                style="border-radius: 6px; align-center">
                                        <input type="reset" value="Reset" name="" class="btn-danger"
                                                style="border-radius: 6px;">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
  <?php  } ?>
