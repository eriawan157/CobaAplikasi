<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $eks   = explode(".",$_FILES['lampiran']['name']);
        $foto_ktp = "Ktp-".round(microtime(true)).".".end($eks);
        $sb    = $_FILES['lampiran']['tmp_name'];
        $upd    = move_uploaded_file($sb,'images/'.$foto_ktp);
        $nmr_ktp = $_POST['nmr_ktp'];
        $nama_pemohon = $_POST['nama_pemohon'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lhr = $_POST['tanggal_lhr'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $pekerjaan = $_POST['pekerjaan'];
        $alamat = $_POST['alamat'];
        $nomor_hp = $_POST['nomor_hp'];
        $keperluan = $_POST['keperluan'];
        $extensi   = explode(".",$_FILES['lampiran']['name']);
        $lampiran = "Sr-".round(microtime(true)).".".end($extensi);
        $sumber    = $_FILES['lampiran']['tmp_name'];
        $upload    = move_uploaded_file($sumber,'images/'.$lampiran);


        $sql ="insert into mhn_ur_pribadi(foto_ktp,nmr_ktp,nama_pemohon,tempat_lahir,tanggal_lhr,jenis_kelamin,pekerjaan,alamat,nomor_hp
        ,keperluan,lampiran) 
        values ('$foto_ktp','$nmr_ktp','$nama_pemohon','$tempat_lahir','$tanggal_lhr','$jenis_kelamin','$pekerjaan','$alamat'
        ,'$nomor_hp','$keperluan','$lampiran')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_ur_pribadi.php?status=sukses');
		}else {
			header('Location:fm_ur_pribadi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>