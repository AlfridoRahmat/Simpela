<?php

include "koneksi.php";
$tahun = $_POST["tahun"];  

$deploy = "SELECT c.nama_provinsi,
CASE WHEN
COALESCE((d.total_pupuk_urea -SUM(b.pupuk_urea)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_urea -SUM(b.pupuk_urea)),0)
END as pupuk_urea,
CASE WHEN
COALESCE((d.total_pupuk_sp -SUM(b.pupuk_sp)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_sp -SUM(b.pupuk_sp)),0)
END as pupuk_sp,
CASE WHEN
COALESCE((d.total_pupuk_za -SUM(b.pupuk_za)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_za -SUM(b.pupuk_za)),0)
END as pupuk_za,
CASE WHEN
COALESCE((d.total_pupuk_npk -SUM(b.pupuk_npk)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_npk -SUM(b.pupuk_npk)),0)
END as pupuk_npk,
CASE WHEN
COALESCE((d.total_pupuk_fk -SUM(b.pupuk_fk)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_fk -SUM(b.pupuk_fk)),0)
END as pupuk_fk,
CASE WHEN
COALESCE((d.total_pupuk_og -SUM(b.pupuk_og)),0) < 0 THEN '0'
ELSE COALESCE((d.total_pupuk_og -SUM(b.pupuk_og)),0)
END as pupuk_og
FROM tb_pupuk b
RIGHT JOIN tb_kecamatan as a
ON a.id_kecamatan = b.id_kecamatan 
AND b.tahun = '$tahun'
RIGHT JOIN tb_prov as c
ON a.id_prov  = c.id_prov
LEFT JOIN tb_dist as d
ON c.id_prov = d.id_prov
GROUP BY c.id_prov";

$no = 1;
$result  = mysqli_query($connection,$deploy);	
while($kab = mysqli_fetch_array($result)) {
?>
<tr>
                         <td> <?php echo $no++?></td>
                         <td>  <?php echo "$kab[nama_provinsi]"?></td>
                         <td id="urea"> <?php echo "$kab[pupuk_urea]"?></td>
                         <td id="sp"> <?php echo "$kab[pupuk_sp]"?></td>
                         <td id="za"> <?php echo "$kab[pupuk_za]"?></td>
                         <td id="npk"> <?php echo "$kab[pupuk_npk]"?></td>
                         <td id="fk"> <?php echo "$kab[pupuk_fk]"?></td>
                         <td id="og"> <?php echo "$kab[pupuk_og]" ?></td>                                       
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