<?php

    include './includes/koneksi.php';

    $query=mysqli_query($koneksi,"SELECT * from  parkings where status='OUT'");
    $count_parkings=mysqli_num_rows($query);
    // $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);
    // echo $count_parkings ;
    // if ($count_parkings=null){
    //     echo "0";
    //     return 0;
    // } else { 
    //     return $count_parkings ;
    // }
 ?>