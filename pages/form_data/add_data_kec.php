<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>e-Sarpem Pertanian</title>
  <link rel="icon" type="image/png" href="../../asset/images/icons/favicon.ico"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">


      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>



    </nav>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-1">
            <div class="col-auto">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item ">Input Penyaluran</li>
                <li class="breadcrumb-item active">Kabupaten</li> 
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- /.card-header -->

        <div class="card">
          <div class="card-header">
            <div class="row">
              <h3 class="card-title"> Input Penyaluran Kabupaten </h3>

            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="POST" action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kabupaten</label>
                    <select class="form-control select2" style="width: 100%;" onchange="getProv(this.value);">
                      <option disabled="disabled" selected="selected"> Nama Kabupaten</option>
                      <?php
                  include_once "../../koneksi.php";

								$dropProv = "SELECT * FROM tb_prov";
								$dropEx = mysqli_query($connection,$dropProv);
								
								while($dataProv = mysqli_fetch_array($dropEx)) 	{
								?>
                      <option value="<?php echo $dataProv["id_prov"]; ?>"> <?php echo $dataProv["nama_provinsi"]?>
                      </option>
                      <?php
								}
								?>







                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label> Kecamatan </label>
                    <select class="form-control select2" style="width: 100%;" id="kecamatan" name="ish">




                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tahun</label>
                    <select class="form-control select2" style="width: 100%;" name="tahun">
                      <option value="2021" selected>2021</option>
                      <option value="2022">2022</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label> Bulan </label>
                    <select class="form-control select2" style="width: 100%;" name="bulan">
                      <option value="Januari" selected>Januari</option>
                      <option value="Februari">Februari</option>
                      <option value="Maret">Maret</option>
                      <option value="April">April </option>
                      <option value="Mei">Mei </option>
                      <option value="Juni">Juni</option>
                      <option value="Juli">Juli</option>
                      <option value="Agustus">Agustus </option>
                      <option value="September">September </option>
                      <option value="Oktober">Oktober </option>
                      <option value="November">November</option>
                      <option value="Desember">Desember</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Urea</label>
                    <input type="number" class="form-control select2" placeholder="Urea" required step="0.001"
                      name="urea">

                    </input>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>SP-36 </label>
                    <input type="number" class="form-control select2" placeholder="SP" required step="0.001" name="sp">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>ZA </label>
                    <input type="number" class="form-control select2" placeholder="Za" required step="0.001" name="za">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>NPK</label>
                    <input type="number" class="form-control select2" placeholder="NPK" required step="0.001" name="npk">

                    </input>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>NPK Formula Khusus </label>
                    <input type="number" class="form-control select2" placeholder="NPK Formula Khusus" required
                      step="0.001" name="fk">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group">
                    <label>Organik Granul </label>
                    <input type="number" class="form-control select2" placeholder="Organik Granul" required step="0.001"
                      name="og">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <div class="col-md-3">

<button type="submit" class="form-control btn btn-primary rounded submit px-5 toastsDefaultSuccess" name="tombol">Submit Data Alokasi</button>
</div>

            </form>
            
            <!-- /.row -->
            <?php
    include_once "../../koneksi.php";
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
echo "<script>
                document.location='../form_data/add_data_kec.php';

                </script>"; 



}
?>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
    </div>
    <!-- /.card -->

    <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->

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
      
    function getProv(val) {
      $.ajax({
        type: "POST",
        url: "../pipeline/data_kecamatan_get.php",
        data: "id_prov=" + val,
        success: function (data) {

          $("#kecamatan").html(data);

        }
      });
    }

    

 

  </script>
</body>

</html>
