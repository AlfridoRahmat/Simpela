<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMPELA Pertanian</title>
  <link rel="icon" type="image/png" href="../../asset/images/icons/favicon.ico"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
  <!-- Leaflet -->
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet-src.js"></script>
	<script src="https://unpkg.com/leaflet-ui@0.4.5/dist/leaflet-ui-src.js"></script>

	<script src="dist/leaflet-kmz-src.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
       html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .map {
        /* margin: 0;
        padding: 0; */
        /* width: 1200px; */
        /* height: 100%; */
        /* width: 1200px; */
        height: 600px;
      }
    </style>
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
      <span class="brand-text font-weight-light">Simpela Pertanian</span>
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
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Pemetaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_lahan.php" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lahan Sawah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_sawah.php" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toko Pupuk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
              <a href="#" class="nav-link active ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Manage Data Pemetaan
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data_lahan.php" class="nav-link  ">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Data Lahan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="data_pupuk.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Data Toko Pupuk</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link  ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
               Master Data
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="add_lahan.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Upload Data Lahan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add_pupuk.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> Upload Toko Pupuk</p>
                  </a>
                </li>
              </ul>
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
              <li class="breadcrumb-item "> Pemetaan</li>
              <li class="breadcrumb-item active">Lahan Sawah</li>
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
               
               
        <select>
            <option disabled selected> Kabupaten </option>			
	    	</select>     
    </div>
   
              <!-- /.card-header -->
              <div class="card-body">
              <!-- // mapnya anjg -->
              <div id="map" class="map"></div>
              <script>
		var map = L.map('map', {
			center: [-4.00009925001936, 122.5142745973001], 
			zoom: 12,
			mapTypeId: 'satellite',
			mapTypeIds: ['streets',  'satellite', 'topo'],
			gestureHandling: false,
			searchControl: false,
			locateControl: true,
			pegmanControl: false,
			fullscreenControl: true,
			minimapControl: false,
			preferCanvas: false,
			trackResize: true,
			attributeControl: false,
			minZoom:11,
			maxZoom:17,
			visualClick:false,
			//disableDefaultUI: false,
			//layersControl: false,

			plugins: [
				"@raruto/leaflet-elevation@1.3.x/dist/leaflet-elevation.css",
				"@raruto/leaflet-elevation@1.3.x/dist/leaflet-elevation.js"
			]
		});

		// Instantiate KMZ parser (async)
		var kmz = L.kmzLayer(null, {
			// geometryToLayer: function(data, xml) {
			// 	let layer = this._geometryToLayer(data, xml);
			// 	let el = xml.getElementsByTagName('GroundOverlay');
			// 	for (let k = 0; k < el.length; k++) {
			// 		l = _.parseGroundOverlay(el[k], data.properties);
			// 		if (l) {
			// 			layer.addLayer(l);
			// 		}
			// 	}
			// 	return layer;
			// }
		}).addTo(map);

		kmz.on('load', function(e) {
			// control.addOverlay(e.layer, e.name);
			e.layer.addTo(map);
		});

	// marker nya
    var marker = L.marker([-3.9922560617994294, 122.5142054096418]).addTo(map)
			.bindPopup("<b>Toko Putri Tani</b><br />").openPopup();



		// kmz.add('../examples/regions.kmz');
		// kmz.add('../examples/capitals.kmz');
		// kmz.add('../examples/globe.kmz');
		// kmz.add('../examples/multigeometry.kmz');
		// kmz.add('../examples/etna.kmz');

		

		// var controlElevation;

		// map.on('plugins_loaded', function() {
		//
		// 	controlElevation = L.control.elevation(opts.elevationControl.options);
		// 	var controlLayer = L.control.layers(null, null, opts.layersControl.options);
		//
		// 	controlElevation.addTo(map);
		// 	controlLayer.addTo(map);
		//
		// 	controlElevation.on('eledata_loaded', function(e) {
		// 		controlLayer.addOverlay(e.layer, e.name);
		// 	});
		//
		// 	controlElevation.load(opts.elevationControl.url);
		//
		// });



      // Model Di Kanan Atas Utk Display Semua KMZ yang ada

		// var control = L.control.layers(null, null, {
		// 	collapsed: false
		// }).addTo(map);

	</script>












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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
