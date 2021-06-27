<?php
                include_once "koneksi.php";
                // error_reporting(0);


                    if (!empty($_POST["id_prov"] && !empty($_POST["bulan"] && !empty($_POST["tahun"])) )){
                    $id_prov = $_POST["id_prov"];
                    $bulan = $_POST["bulan"];
                    $tahun = $_POST["tahun"];                
                    $fetch_data = "SELECT a.nama_kec,
                    COALESCE(b.pupuk_urea,0) as pupuk_urea ,
                    COALESCE(b.pupuk_sp,0) as pupuk_sp,
                    COALESCE(b.pupuk_za,0)as pupuk_za,
                    COALESCE(b.pupuk_npk,0)as pupuk_npk,
                    COALESCE(b.pupuk_fk,0)as pupuk_fk, 
                    COALESCE(b.pupuk_og,0) as pupuk_og
                    FROM tb_pupuk b
                    right join (SELECT * FROM tb_kecamatan WHERE id_prov = $id_prov) AS a
                    ON a.id_kecamatan = b.id_kecamatan
                    AND b.bulan = '$bulan' 
                    AND b.tahun = '$tahun'   ";
                    $no = 1;
                    $execute = mysqli_query($connection,$fetch_data);
                    while ($data = mysqli_fetch_array($execute)){                  
                    ?>
                    <tr>
                         <td> <?php echo $no++?></td>
                         <td>  <?php echo "$data[nama_kec]"?></td>
                         <td id="urea"> <?php echo "$data[pupuk_urea]"?></td>
                         <td id="sp"> <?php echo "$data[pupuk_sp]"?></td>
                         <td id="za"> <?php echo "$data[pupuk_za]"?></td>
                         <td id="npk"> <?php echo "$data[pupuk_npk]"?></td>
                         <td id="fk"> <?php echo "$data[pupuk_fk]"?></td>
                         <td id="og"> <?php echo "$data[pupuk_og]" ?></td>                                       
                    </tr>
                    <?php
                    }
                
                    ?>
					<tr>
                        <td>  </td>
                        <td style="text-align:right"><b> Jumlah :</b> </td>
                        <td id="total_urea">  </td>
                        <td id="total_sp">  </td>
                        <td id="total_za">  </td>
                        <td id="total_npk">  </td>
                        <td id="total_fk">  </td>
                        <td id="total_og">  </td>
                    </tr>
                    <?php }
                    
                   
                    ?>


<script type="text/javascript">
    $(function() {
       var TotalValue = 0;
       $("tr #urea").each(function(index,value){
         currentRow = parseFloat($(this).text());
         TotalValue += currentRow
       });
       document.getElementById('total_urea').innerHTML = TotalValue.toFixed(3);
});
      $(function() {

       var TotalValue = 0;

       $("tr #sp").each(function(index,value){
         currentRow = parseFloat($(this).text());
         TotalValue += currentRow
       });

       document.getElementById('total_sp').innerHTML = TotalValue.toFixed(3);

});
$(function() {

var TotalValue = 0;

$("tr #za").each(function(index,value){
  currentRow = parseFloat($(this).text());
  TotalValue += currentRow
});

document.getElementById('total_za').innerHTML = TotalValue.toFixed(3);

});
$(function() {

var TotalValue = 0;

$("tr #npk").each(function(index,value){
  currentRow = parseFloat($(this).text());
  TotalValue += currentRow
});

document.getElementById('total_npk').innerHTML = TotalValue.toFixed(3);

});
$(function() {

var TotalValue = 0;

$("tr #fk").each(function(index,value){
  currentRow = parseFloat($(this).text());
  TotalValue += currentRow
});

document.getElementById('total_fk').innerHTML = TotalValue.toFixed(3);

});
$(function() {

var TotalValue = 0;

$("tr #og").each(function(index,value){
  currentRow = parseFloat($(this).text());
  TotalValue += currentRow
});

document.getElementById('total_og').innerHTML = TotalValue.toFixed(3);

});
</script>