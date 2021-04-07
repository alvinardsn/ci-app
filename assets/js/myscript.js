const flashData = $('.flash-data').data('flashdata');
if (flashData){
    Swal.fire({
        icon: 'success',
        title: 'Data Mahasiswa',
        text: 'Berhasil ' + flashData
      });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {
   e.preventDefault() ; // mematikan fungsi default browser pada a href

   const href = $(this).attr('href'); // mengambil data href pada data yang di click

   Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
        document.location.href = href; // untuk menjalankan method href mahasiswa/hapus
    }
  })
});