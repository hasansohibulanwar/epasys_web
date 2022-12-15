<?php
include 'model/functions.php';
$id = $_GET["id"];

if(hapusSatpam($id) > 0) {
  
    // header('location : vehicleData.php?m=1');
    // header("location:vehicleData.php?pesan=deleted");
    echo "<script> 
    alert('data berhasil dihapus !');
    document.location.href = 'satpamData.php';
    </script>";
    
}

?>