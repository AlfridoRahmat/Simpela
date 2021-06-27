<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";


?>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>E-Sarpem Pertanian</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>`
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-wrapper .btn {
	float: right;
	color: #333;
	background-color: #fff;
	border-radius: 3px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-wrapper .btn:hover {
	color: #333;
	background: #f2f2f2;
}
.table-wrapper .btn.btn-primary {
	color: #fff;
	background: #03A9F4;
}
.table-wrapper .btn.btn-primary:hover {
	background: #03a3e7;
}
.table-title .btn {		
	font-size: 13px;
	border: none;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
.table-title {
	color: #fff;
	background: #4b5366;		
	padding: 16px 25px;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.show-entries select.form-control {        
	width: 60px;
	margin: 0 5px;
}
.table-filter .filter-group {
	float: right;
	margin-left: 15px;
}
.table-filter input, .table-filter select {
	height: 34px;
	border-radius: 3px;
	border-color: #ddd;
	box-shadow: none;
}
.table-filter {
	padding: 5px 0 15px;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 5px;
}
.table-filter .btn {
	height: 34px;
}
.table-filter label {
	font-weight: normal;
	margin-left: 10px;
}
.table-filter select, .table-filter input {
	display: inline-block;
	margin-left: 5px;
}
.table-filter input {
	width: 200px;
	display: inline-block;
}
.filter-group select.form-control {
	width: 110px;
}
.filter-icon {
	float: right;
	margin-top: 7px;
}
.filter-icon i {
	font-size: 18px;
	opacity: 0.7;
}	
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 80px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.view {        
	width: 30px;
	height: 30px;
	color: #2196F3;
	border: 2px solid;
	border-radius: 30px;
	text-align: center;
}
table.table td a.view i {
	font-size: 22px;
	margin: 2px 0 0 1px;
}   
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.status {
	font-size: 30px;
	margin: 2px 2px 0 0;
	display: inline-block;
	vertical-align: middle;
	line-height: 10px;
}
.text-success {
	color: #10c469;
}
.text-info {
	color: #62c9e8;
}
.text-warning {
	color: #FFC107;
}
.text-danger {
	color: #ff5b5b;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                    <h2>E-Sarpem Pertanian </h2>
                    </div>
                    <div class="col-sm-8">						
                        <a onclick="exportTableToExcel('tblData')" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
                        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="material-icons" >&#xE24D;</i> <span>Tambah Data</span></button>

                    </div>
                </div>
            </div>
            <div class="table-filter">
                <div class="row">
                        <a href="kecamatan_data.php" class="btn btn-primary"><span>Data Kecamatan</span></a> 
            <div class="col-sm-10">
						<div class="filter-group">
                            <label>Tahun</label>
                            <select class="form-control" id="tahun" onchange="getTahun(this.value);">
                                <option value="" selected disabled> - 		</option>
                                <option value="2021" >2021		</option>
                                <option value="2022">2022		</option>
							

							</select>
                        </div>
                    </div>
                </div>    
                </div>
               
            <table class="table table-striped table-hover" border="2px" id="tblData">
                <thead style="text-align:center">
                    <tr>
                        <th>No </th>
                        <th>Kabupaten</th>
                        <th>Urea</th>
                        <th>SP-36</th>						
                        <th>ZA</th>						
                        <th>NPK</th>
                        <th style="width:10%">NPK Formula Khusus</th>
                        <th style="width:10%">Organik Granul</th>
                    </tr>
                </thead>
                <tbody id="table_data">
                   
                </tbody>
            </table>
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      	
		      	<h3 class="text-center mb-3"></h3>
		      	<form method="POST" action="#" class="login-form">
		      		<div class="form-group">
		      		
                      
                            <select class="form-control" id="provinsi" onchange="getKec(this.value);">
                            <option selected disable> - </option>

								<?php
								$dropProv = "SELECT * FROM tb_prov";
								$dropEx = mysqli_query($connection,$dropProv);
								
								while($dataProv = mysqli_fetch_array($dropEx)) 	{
								?>
								<option value="<?php echo $dataProv["id_prov"]; ?>"> <?php echo $dataProv["nama_provinsi"]?> </option>
								<?php
								}
								?>	
                        	</select>

                             <select class="form-control" id="kecamatan" name="ish">

								
                        	</select>



		     		</div>
                      <div class="form-group d-flex">
                        <select class="form-control rounded-left" name="bulan">
                                <option value="Januari" >Januari</option>	
                                <option value="Februari">Februari	</option>
                                <option value="Maret">Maret		</option>
                                <option value="April">April		</option>
								<option value="Mei">Mei			</option>
								<option value="Juni">Juni		</option>
								<option value="Juli">Juli		</option>
								<option value="Agustus">Agustus		</option>
								<option value="September">September	</option>
								<option value="Oktober">Oktober		</option>
								<option value="November">November	</option>
								<option value="Desember">Desember	</option>
                        </select>
                        <select class="form-control rounded-left" name="tahun">
                          <option value="2021" >2021</option>	
                          <option value="2020">2020	</option>
                        </select>
                        
		      		</div>
	            <div class="form-group ">
                UREA
	              <input type="number" class="form-control rounded-left" placeholder="" name="urea" required step='0.01'>
                SP-36
	              <input type="number" class="form-control rounded-left" placeholder="" name="sp" required step='0.01'>
	            ZA
	              <input type="number" class="form-control rounded-left" placeholder="" name="za" required step='0.01'>
                NPK
	              <input type="number" class="form-control rounded-left" placeholder="" name="npk" required step='0.01'>
	            NPK Formula Khusus
	              <input type="number" class="form-control rounded-left" placeholder="" name="fk" required step='0.01' >
                Organik Granul
	              <input type="number" class="form-control rounded-left" placeholder="" name="og" required step='0.01'>
	            </div>
	            <div class="form-group">
            
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-5" name="tombol">Submit Data !</button>
	            </div>
	           </form>
		      </div>
		      <div class="modal-footer justify-content-center">
		      	<p>Pertanian@2021</p>
		      </div>
		    </div>
		  </div>
		</div>                
        <?php

if (isset($_POST['tombol'])){
    $id_kec = $_POST['ish'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $urea = $_POST['urea'];
    $sp = $_POST['sp'];
    $za = $_POST['za'];
    $npk = $_POST['npk'];
    $fk = $_POST['fk'];
    $og = $_POST['og'];

$insert = "INSERT INTO tb_pupuk (id_kecamatan,pupuk_urea,pupuk_sp,pupuk_za,pupuk_npk,pupuk_fk,pupuk_og,bulan,tahun) 
VALUES ('$id_kec','$urea','$sp','$za','$npk','$fk','$og','$bulan','$tahun')";

mysqli_query($connection,$insert);



}
?>
            
            <div class="clearfix">
                <div class="hint-text">Pertanian@ 2021</div>
            </div>
        </div>
    </div>        
</div>     

</body>
<script type="text/javascript">



function getTahun(val){
   
   
   $.ajax({
   type: "POST",
   url: "data_alokasi_get.php",
   data : "tahun="+ val,
   success: function(data){
   
       $("#table_data").html(data);
       
   }
});
}

function getKec(val){
   
   $.ajax({
   type: "POST",
   url: "set_modal.php",
   data : "id_prov="+ val,
   success: function(data){
          $("#kecamatan").html(data);
          }
});
}
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
	var bulan = document.getElementById("bulan");
	var tahun = document.getElementById("tahun");

	
    // Specify file name
    filename = filename?filename +'.xls': 'Provinsi_'+ bulan.value +'_'+ tahun.value  +'.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


</script>
</html>