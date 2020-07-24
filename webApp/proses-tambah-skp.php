<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $no_ktp = $_POST['no_ktp'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $jns_penyalahgunaan = $_POST['jns_penyalahgunaan'];
        $hub_penyalahgunaan = $_POST['hub_penyalahgunaan'];
        $rencana_klinik = $_POST['rencana_klinik'];


        $sql ="insert into rh_pribadi(no_ktp,nama_lengkap,alamat,no_hp,jns_penyalahgunaan,hub_penyalahgunaan,rencana_klinik) 
        values ('$no_ktp','$nama_lengkap','$alamat','$no_hp','$jns_penyalahgunaan','$hub_penyalahgunaan','$rencana_klinik')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_sk_pribadi.php?status=sukses');
		}else {
			header('Location:fm_sk_pribadi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>