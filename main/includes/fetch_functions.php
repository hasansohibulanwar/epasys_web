<?php 
include 'koneksi.php';

//ambil data
// $result = mysqli_query($koneksi, "SELECT * FROM vechiles");

// var_dump($result);

// $query= mysqli_fetch_assoc($result);  
// mengembalikan keduanya
// $query = mysqli_fetch_object($result);

// var_dump($query->id);\
//ambil all data
// while( $query = mysqli_fetch_assoc($result)){
//  var_dump($query['merek']);
// }
// $result = mysqli_query($koneksi , $query);

function query($query) {
    global $koneksi;
    //lemari
    $result = mysqli_query($koneksi , $query);
    //data kosong untuk wadah /kotak
    $rows= [];

    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    //kembalikan kotaknya
    return $rows;

}
?>