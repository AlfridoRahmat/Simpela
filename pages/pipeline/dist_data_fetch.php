<?php

include "koneksi.php";
$tahun = $_POST["tahun"];  
$id_prov = $_POST["id_kec"];
$bulan = $_POST["bulan"];
$deploy = "SELECT * FROM tb_pupuk WHERE id_kecamatan = $id_prov AND tahun= '$tahun' AND bulan = '$bulan'";

$result  = mysqli_query($connection,$deploy);	
while($kab = mysqli_fetch_array($result)) {
?>

<div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Urea</label>
                    <input type="number" value="<?php echo"$kab[pupuk_urea]"?>" class="form-control select2" placeholder="Urea" required step="0.001"
                      name="urea">
                        
                    </input>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>SP-36 </label>
                    <input type="number" value="<?php echo"$kab[pupuk_sp]"?>" class="form-control select2" placeholder="SP" required step="0.001" name="sp">
                    

                    </input>
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>ZA </label>
                    <input type="number" value="<?php echo"$kab[pupuk_za]"?>" class="form-control select2" placeholder="Za" required step="0.001" name="za">
                     
                  </input>
                 
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
          
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>NPK</label>
                    <input value="<?php echo"$kab[pupuk_npk]"?>" type="number" class="form-control select2" placeholder="NPK" required step="0.001" name="npk">
                

                  
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>NPK Formula Khusus </label>
                    <input type="number" value="<?php echo"$kab[pupuk_fk]"?>" class="form-control select2" placeholder="NPK Formula Khusus" required step="0.001" name="fk">
                     
                   
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Organik Granul </label>
                   
                    <input type="number" value="<?php echo"$kab[pupuk_og]"?>" class="form-control select2" placeholder="Organik Granul" required step="0.001" name="og">

               
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <input type="number" value="<?php echo"$kab[id_pupuk]"?>" hidden name="id_dist"> 
                
                <div class="col-md-6">
              <button type="submit" class="form-control btn btn-primary rounded submit px-5 toastsDefaultSuccess" name="tombol">Ubah Data!</button>

              </div>
              <div class="col-md-6">
              <a button type="button" class="form-control btn btn-danger rounded submit px-5 toastsDefaultSuccess" href="../pipeline/deletedist.php?id=<?php echo"$kab[id_pupuk]";?>">Hapus Data!</a>

              </div>
</div>
</br>
              <?php
}
              ?>