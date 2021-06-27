<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Sarpem Pertanian</title>
  <link rel="icon" type="image/png" href="../../asset/images/icons/favicon.ico"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/logop.png" alt="AdminLTELogo" height="60" width="60">
  </div>  

<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      </ul>   
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../../dist/img/logox.png" alt="AdminLTE Logo" class="brand-image img-circle " style="opacity: .8">
      <span class="brand-text font-weight-light">e-Sarpem Pertanian</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <li class="nav-item">
                <a href="../index.html" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
   
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Data Alokasi Pupuk
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="provinsi_data.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Provinsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kabupaten_data.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kabupaten</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="alokasi_data.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Data Alokasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="alokasi_data_all.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Alokasi Keseluruhan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link  ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Manage Data Alokasi
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../form_data/add_data_kec.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Tambah Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../layout/boxed.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Tambah Data Alokasi</p>
                  </a>
                </li>
              </ul>
            </li>
              <li class="nav-item">
                <a href="..\examples\404.html" class="nav-link ">
                  <i class="far fa-copy nav-icon"></i>
                  <p> ALSINTAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="..\examples\404.html" class="nav-link ">
                  <i class="far fa-copy nav-icon"></i>
                  <p> Pembiayaan Pertanian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pipeline/logout.php" class="nav-link ">
                  <i class="far fa-copy nav-icon"></i>
                  <p> Log Out</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-auto">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</a></li>
              <li class="breadcrumb-item "> Alokasi Pupuk</li>
              <li class="breadcrumb-item active">Provinsi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     
              <!-- /.card-header -->
            <div class="container-fluid">
            <div class="card">

              <div class="card-header">
               
               
        <select class=""  id="tahun" onchange="getTahun(this.value);">
            <option disabled selected> Tahun Alokasi </option>
            <option value="2021">2021</option>
            <option value="2022">2022	</option>						
		</select>
   
    <div class="card-tools">
            <button type="button" class="btn btn-primary"  title="export document" onclick="exportTableToExcel('tblData')">
              <i class="fas fa-copy"> Export Data To Excel</i>
            </button>
         </div> 
    </div>
   
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblData" class="table table-bordered table-striped" border="1">
                  <thead style="text-align:center">
                    <tr>
                      <th >No </th>
                      <th>Kabupaten</th>
                      <th>Urea</th>
                      <th>SP-36</th>						
                      <th>ZA</th>						
                      <th>NPK</th>
                      <th >NPK Formula Khusus</th>
                      <th >Organik Granul</th>
                  </tr>
                  </thead>
                  <tbody id="ready">

                
                  <tfoot>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versi</b> Beta
    </div>
    <strong>Pertanian &copy; 2021 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  

  
function getTahun(val){
 
 
 $.ajax({
 type: "POST",
 url: "../pipeline/data_total_alok_get.php",
 data : "tahun="+ tahun.value,
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
    
	var bulan = document.getElementById("bulan");
	var tahun = document.getElementById("tahun");

	
    // Specify file name
    filename = filename?filename +'.xls': 'Alokasi Pupuk Tahun '+  tahun.value  +'.xls';
    
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
