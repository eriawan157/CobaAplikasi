<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $no_ktp = $_POST['no_ktp'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat_lhr = $_POST['tempat_lhr'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $pekerjaan = $_POST['pekerjaan'];
        $tgl_kejadian = $_POST['tgl_kejadian'];
        $waktu = $_POST['waktu'];
        $isi_pengaduan = $_POST['isi_pengaduan'];


        $sql ="insert into aduan_masyarakat (no_ktp,nama_lengkap,tempat_lhr,tgl_lhr,alamat,no_hp,pekerjaan,tgl_kejadian
        ,waktu,isi_pengaduan) 
        values ('$no_ktp','$nama_lengkap','$tempat_lhr','$tgl_lhr','$alamat','$no_hp','$pekerjaan','$tgl_kejadian'
        ,'$waktu','$isi_pengaduan')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_pengaduan.php?status=sukses');
		}else {
			header('Location:fm_pengaduan.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>