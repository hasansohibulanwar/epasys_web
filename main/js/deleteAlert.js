$('.hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href')

    Swal.fire({

    title : 'Apakah Anda Yakin ?',
    text : 'Data akan dihapus ',
    type : 'warning',
    icon : '',
    
    showCancelButton: true,
    confirmButtonText: "Hapus Data",
    confirmButtonColor: "#ff0055",
    cancelButtonColor: "#3084d6",
    
    }).then((result) => {
    if (result.value) {
    document.location.href = href;
    if(result.isConfirmed ){
    document.location.href = "vehicleData.php";
    
    Swal.fire({
    
    title : 'Deleted!',
    text : 'File telah dihapus ',
    icon : 'success',
    // icon : 'warning',
    // setTimeout : 3000,
    timer : 10000
    })
    setTimeout = 10000;
}

}
})
})