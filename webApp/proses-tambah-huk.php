<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $nama_penyidik = $_POST['nama_penyidik'];
        $pihak_hukum = $_POST['pihak_hukum'];
        $jml_tersangka = $_POST['jml_tersangka'];
        $tanggal_penangkapan = $_POST['tanggal_penangkapan'];
        $nmr_lp_lkn = $_POST['nmr_lp_lkn'];
        $tgl_lp = $_POST['tgl_lp'];
        $tgl_asesmen = $_POST['tgl_asesmen'];


        $sql ="insert into rh_proses_hkm(nama_penyidik,pihak_hukum,jml_tersangka,tanggal_penangkapan,nmr_lp_lkn,tgl_lp,tgl_asesmen) 
        values ('$nama_penyidik','$pihak_hukum','$jml_tersangka','$tanggal_penangkapan','$nmr_lp_lkn','$tgl_lp','$tgl_asesmen')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_hukum.php?status=sukses');
		}else {
			header('Location:fm_hukum.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>