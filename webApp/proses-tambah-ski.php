<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $nama_pelapor = $_POST['nama_pelapor'];
        $instansi = $_POST['instansi'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $jml_curiga = $_POST['jml_curiga'];
        $jns_penyalahgunaan = $_POST['jns_penyalahgunaan'];


        $sql ="insert into rh_instansi(nama_pelapor,instansi,alamat,no_hp,jml_curiga,jns_penyalahgunaan) 
        values ('$nama_pelapor','$instansi','$alamat','$no_hp','$jml_curiga','$jns_penyalahgunaan')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_sk_instansi.php?status=sukses');
		}else {
			header('Location:fm_sk_instansi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>