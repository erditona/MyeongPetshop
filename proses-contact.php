<!-- Proses Simpan Contact -->
<?php include("koneksi.php");

if(isset($_POST['btnkirim']))
{

    $simpan = mysqli_query($koneksi, "INSERT INTO contact (nama, no_email, isi_pesan)
                                      VALUES ('$_POST[tnama]', 
                                              '$_POST[tnoemail]', 
                                              '$_POST[tisipesan]')
                                      ");
    	if($simpan) //jika simpan sukses
        {
            header('Location: contact.php?status=sukses');    
        }
        else
        {
            header('Location: contact.php?status=gagal');    
        }
}
?>
<!-- Akhir Proses Simpan Contact -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>