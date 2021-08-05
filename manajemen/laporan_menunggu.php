<form method="POST">
    <div class="row">
 
    <input type="text" name="cari" placeholder="Cari Nomor Laporan" style="width: 280px; border-radius: 10px;">
<input type="submit" value="cari" style="border-radius: 10px;">          

<div class="col-xl-12 col-md-6 mb-4">
    <br><h4>Laporan Menunggu Validasi</h4> <br>
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                    require '../koneksi.php';
                                    error_reporting(0);
                                    $jumlahDataPerHalaman = 5;
                                    $hasil= mysqli_query($conn,"SELECT * from pengaduan where status='cc'");
                                    $jumlahData = mysqli_num_rows($hasil);
                                    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                                    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;
                                    $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
                                    
 
                                    ?>
                                <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No Aduan</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        require '../koneksi.php';
                                        $no=1;
                                        $carii=$_POST['cari'];
                                        if($carii != ''){
                                            $sql = mysqli_query($conn,"SELECT * from pengaduan where status = 'cc' and  no like '".$carii."' limit $awalData,$jumlahDataPerHalaman");
                                        }else{
                                            $sql = mysqli_query($conn,"SELECT * from pengaduan WHERE status='cc' limit $awalData,$jumlahDataPerHalaman");
                                        }
                                    
                                   
                                     while($data=mysqli_fetch_array($sql)){
                    
                  
                  ?>
                        <tbody>
                                            
                                                <td><?php echo $data['no']?></td>
                                                <td><?php echo $data['judul']; ?></td>
                                                <td><?php echo $data['isi'];?></td>
                                                <td>
                                                    <a href="?url=detail_laporan&no=<?php echo $data['no'] ?>" class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Detail</span>
                                                    </a>
                                                    <a href="?url=hapus_laporan&no=<?php echo $data['no'] ?>" class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                       <?php  } ?>
                                    </table>
                                    <?php if ($halamanAktif > 1 ) : ?>      
                            <a href="?url=laporan_masuk&halaman=<?=$halamanAktif-1  ?>">&lt;</a>  
                         <?php endif ;?>  
                        <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if( $i == $halamanAktif) : ?>
                        <a href="?url=laporan_masuk&halaman=<?= $i; ?>" style="font-weight: bold;"><?= $i;?></a>
                        <?php else : ?>
                        <a href="?url=laporan_masuk&halaman=<?= $i; ?>"><?= $i;?></a>
                        <?php endif;?>
                     <?php endfor ;?> 

                     <?php if ($halamanAktif < $jumlahHalaman ) : ?>      
                            <a href="?url=laporan_masuk&halaman=<?=$halamanAktif+1  ?>">&gt;</a>  
                         <?php endif ;?>
                                </div>
                            </div>
                        </div>

                        </div>
</form>
