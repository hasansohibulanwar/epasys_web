<?php

    include './includes/koneksi.php';

    $query=mysqli_query($koneksi,"SELECT id from  parkings where Status='OUT'");
    $count_parkings=mysqli_num_rows($query);

    echo $count_parkings
 ?>