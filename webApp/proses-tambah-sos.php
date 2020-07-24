<?php 
    include("koneksi.php");
   
    
    $result = mysqli_query($conn,$sql);
    if (isset($_POST['tambah'])) {

        $kategori = $_POST['kategori'];
        $nama_penyelenggara = $_POST['nama_penyelenggara'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $tempat = $_POST['tempat'];
        $nama_pemohon = $_POST['nama_pemohon'];
        $nomor_hp = $_POST['nomor_hp'];
        $jumlah_peserta = $_POST['jumlah_peserta'];
        $tema_kegiatan = $_POST['tema_kegiatan'];
        $extensi   = explode(".",$_FILES['lampiran']['name']);
        $lampiran = "Bnn-".round(microtime(true)).".".end($extensi);
        $sumber    = $_FILES['lampiran']['tmp_name'];
        $upload    = move_uploaded_file($sumber,'../images/'.$lampiran);


        $sql ="insert into mhn_sosialisasi (kategori,nama_penyelenggara,tanggal,waktu,tempat,nama_pemohon,nomor_hp,jumlah_peserta,tema_kegiatan
        ,lampiran) 
        values ('$kategori','$nama_penyelenggara','$tanggal','$waktu','$tempat','$nama_pemohon','$nomor_hp','$jumlah_peserta'
        ,'$tema_kegiatan','$lampiran')";

		
        $query = mysqli_query($conn,$sql);
        if ($query) {
			header('Location:fm_sosialisasi.php?status=sukses');
		}else {
			header('Location:fm_sosialisasi.php?status=gagal');
		}
	}else{
		die("Akses dilarang. . .");
	}
?>