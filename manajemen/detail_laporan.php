                   <div class="row">
 
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-10 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <?php 
                                require '../koneksi.php';
                                $sql=mysqli_query($conn,"SELECT * FROM pengaduan where no='$_GET[no]'");
                                $data=mysqli_fetch_array($sql);
                                if ($sql)
                                {


       
                                    ?>
                                    <form action="laporan_selesai.php" method="POST">
                                    <div class="form-group">
                                            <label for="">Nomor Pengaduan</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="no" readonly value="<?php echo $data['no']; ?>">
                                        </div>
                                     <div class="form-group">
                                            <label for="">Nama Pelapor:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nama" readonly value="<?php echo $data['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">NIK Pelapor:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="nik" readonly value="<?php echo $data['nik']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Judul Laporan:</label>
                                            <input type="text" class="form-control form-control-user" id="judul"
                                                name="judul" readonly value="<?php echo $data['judul']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Lokasi Kejadian:</label>
                                           <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi"
                                           readonly value="<?php echo $data['lokasi']; ?>">
                                        </div>
                                        <div class="form-group cols-sm-6">
                                            <label>Isi Laporan:</label>
                                            <textarea class="form-control" rows="7" 
                                            name="isi" readonly><?php echo $data['isi']; ?></textarea>
                                        </div>
                                        <div class="form-group cols-sm-6">
                                        <label>Unit</label>
                                        <input type="text" class="form-control form-control-user" id="level" name="level" 
                                        readonly value="<?php echo $data['unit'];?>">
                                        </div>
                                        
                                        <div class="form-group cols-sm-6">
                                        <label>Investigasi</label>
                                        <input type="text" class="form-control form-control-user" id="level" name="level" 
                                        readonly value="<?php echo $data['investigasi'];?>">
                                        </div>

<br>
                                        
                                        <?php } ?>
                                        </form>         
                              </div>
                                </div>
                            
                            </div>
                        </div>

                    </div>

