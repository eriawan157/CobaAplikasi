<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $nama_instansi = $_POST['nama_instansi'];
        $nama_pemohon = $_POST['nama_pemohon'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $nomor_hp = $_POST['nomor_hp'];
        $jml_laki = $_POST['jml_laki'];
        $jml_perempuan = $_POST['jml_perempuan'];
        $lokasi = $_POST['lokasi'];
        $extensi   = explode(".",$_FILES['lampiran']['name']);
        $lampiran = "Bnn-".round(microtime(true)).".".end($extensi);
        $sumber    = $_FILES['lampiran']['tmp_name'];
        $upload    = move_uploaded_file($sumber,'images/'.$lampiran);


        $sql ="insert into mhn_ur_instansi (nama_instansi,nama_pemohon,alamat,tanggal,waktu,nomor_hp,jml_laki,jml_perempuan,lokasi
        ,lampiran) 
        values ('$nama_instansi','$nama_pemohon','$alamat','$tanggal','$waktu','$nomor_hp','$jml_laki','$jml_perempuan'
        ,'$lokasi','$lampiran')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_ur_instansi.php?status=sukses');
		}else {
			header('Location:fm_ur_instansi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>