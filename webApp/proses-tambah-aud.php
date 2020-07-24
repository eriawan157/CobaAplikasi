<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $kategori = $_POST['kategori'];
        $nama_pemohon = $_POST['nama_pemohon'];
        $nama_instansi = $_POST['nama_instansi'];
        $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
        $waktu = $_POST['waktu'];
        $keperluan = $_POST['keperluan'];
        $nomor_hp = $_POST['nomor_hp'];
        $jumlah_peserta = $_POST['jumlah_peserta'];
        $extensi   = explode(".",$_FILES['lampiran']['name']);
        $lampiran = "Bnn-".round(microtime(true)).".".end($extensi);
        $sumber    = $_FILES['lampiran']['tmp_name'];
        $upload    = move_uploaded_file($sumber,'images/'.$lampiran);


        $sql ="insert into mhn_audiensi (kategori,nama_pemohon,nama_instansi,tanggal_kunjungan,waktu,keperluan,nomor_hp,jumlah_peserta
        ,lampiran) 
        values ('$kategori','$nama_pemohon','$nama_instansi','$tanggal_kunjungan','$waktu','$keperluan','$nomor_hp','$jumlah_peserta'
        ,'$lampiran')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_audiensi.php?status=sukses');
		}else {
			header('Location:fm_audiensi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>