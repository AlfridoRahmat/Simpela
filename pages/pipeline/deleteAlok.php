<?php
include 'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from tb_dist where id_dist=$id";
mysqli_query($connection, $query);


echo "<script>
                alert ('Data Berhasil Dihapus');
                document.location='../form_data/updateAlokasi.php';

                </script>"; 
?>

