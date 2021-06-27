
<?php 
include_once "koneksi.php";
												
$id_prov = $_POST["id_prov"];
$query = "SELECT * FROM tb_kecamatan 
WHERE id_prov= $id_prov ";
$result  = mysqli_query($connection,$query);	
while($kab = mysqli_fetch_array($result)) {
?>

<option value="<?php echo $kab["id_kecamatan"]?>"> 
 <?php echo $kab["nama_kec"]?> </option>
											
 <?php 						
	}
?>
												