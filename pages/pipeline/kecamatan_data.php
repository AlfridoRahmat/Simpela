<!DOCTYPE html>
<html lang="en">
<?php 
include "koneksi.php";

?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tabel</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.5/js/tableexport.min.js"></script>
<script src="FileSaver.js"></script>
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
                        <a id="export" onclick="exportTableToExcel('tblData')" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
                    </div>
                </div>
            </div>
            <div class="table-filter">
                <div class="row">
             					
                        <a href="index.php" class="btn btn-primary"> <span>Data Kabupaten</span></a>
            
                    <div class="col-sm-10">
                      		<div class="filter-group">
                            <label>Provinsi</label>
                            <select class="form-control" id="provinsi" onchange="getId(this.value);">
							<option disabled selected> -  </option>

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
							<div class="filter-group">
                            <label>Bulan</label>
                            <select class="form-control" id="bulan" onchange="getBulan(this.value);">
                                <option value="Januari" selected>Januari</option>		
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April	</option>
								<option value="Mei">Mei	</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus	</option>
								<option value="September">September	</option>
								<option value="Oktober">Oktober	</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
							</select>
                        </div>
						<div class="filter-group">
                            <label>Tahun</label>
                            <select class="form-control" id="tahun" onchange="getTahun(this.value);">
                              <option value="2021" selected>2021</option>
                              <option value="2020">2020	</option>						
							</select>
                        </div>
                        </div>
                    </div>
				</div>				
            </div>
            <table class="table table-striped table-hover" border="2px" id="tblData">
                <thead style="text-align:center">
                    <tr>
                        <th>No </th>
                        <th>Kecamatan</th>
                        <th>Urea</th>
                        <th>SP-36</th>						
                        <th>ZA</th>						
                        <th>NPK</th>
                        <th style="width:10%">NPK Formula Khusus</th>
                        <th style="width:10%">Organik Granul</th>
                    </tr>
                </thead>
                <tbody id="ready">
                  
                
				
				
				
				
				</tbody>
				
            </table>
            <div class="clearfix">
                <div class="hint-text">Pertanian@ 2021</div>
            </div>
        </div>
    </div>        
</div>   
<script type="text/javascript">
function getId(val){
	
 	var bulan = document.getElementById("bulan");
	var tahun = document.getElementById("tahun");
  
	$.ajax({



	type: "POST",
	url: "set_table_kecamatan.php",
	data : "id_prov="+ val +"&bulan="+ bulan.value+"&tahun="+ tahun.value,
	success: function(data){
		
		 $("#ready").html(data);
		
	}
});
}
function getBulan(val){
	
 	var prov = document.getElementById("provinsi");
	var tahun = document.getElementById("tahun");
  
	$.ajax({



	type: "POST",
	url: "set_table_kecamatan.php",
	data : "id_prov="+ prov.value +"&bulan="+ val +"&tahun="+ tahun.value,
	success: function(data){
		
		 $("#ready").html(data);
		
	}
});
}
function getTahun(val){
	var prov = document.getElementById("provinsi");
	var bulan = document.getElementById("bulan");
	$.ajax({
	type: "POST",
	url: "set_table_kecamatan.php",
	data : "id_prov="+ prov.value +"&bulan="+ bulan.value +"&tahun="+ val,
	success: function(data){
	
		$("#ready").html(data);
		
	}
});
}

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
	var prov = document.getElementById("provinsi");
	var bulan = document.getElementById("bulan");
	var tahun = document.getElementById("tahun");

	var nama_prov = prov.options[prov.selectedIndex];
    // Specify file name
    filename = filename?filename +'.xls': nama_prov.text +'_'+ bulan.value +'_'+ tahun.value  +'.xls';
    
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


</body>

</html>