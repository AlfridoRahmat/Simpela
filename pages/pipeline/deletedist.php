<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from tb_pupuk where id_pupuk=$id";
mysqli_query($connection, $query);


echo "<script>
                alert ('Data Berhasil Dihapus');
                document.location='../form_data/updateDataDist.php';

                </script>"; 


