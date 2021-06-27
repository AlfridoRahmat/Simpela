
<?php

include "koneksi.php";
$tahun = $_POST["tahun"];  

$deploy = "SELECT a.nama_provinsi,
COALESCE(b.total_pupuk_urea,0) as pupuk_urea ,
COALESCE(b.total_pupuk_sp,0) as pupuk_sp,
COALESCE(b.total_pupuk_za,0)as pupuk_za,
COALESCE(b.total_pupuk_npk,0)as pupuk_npk,
COALESCE(b.total_pupuk_fk,0)as pupuk_fk, 
COALESCE(b.total_pupuk_og,0) as pupuk_og
FROM tb_dist b
right join (SELECT * FROM tb_prov) AS a
ON a.id_prov = b.id_prov
AND b.tahun = $tahun
";

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