<?php 
    include("koneksi.php");
    if (isset($_POST['edit'])) {
        $id        = $_POST['id_senyawa'];
		$kation     = $_POST['kation'];
		$anion   = $_POST['anion'];
        $rumus_senyawa = $_POST['rumus_senyawa'];
        $nama_senyawa = $_POST['nama_senyawa'];

            $sql = "UPDATE senyawa SET kation ='$kation', anion = '$anion', rumus_senyawa = '$rumus_senyawa',nama_senyawa = '$nama_senyawa' WHERE id_senyawa =$id";
            $query = mysqli_query($conn, $sql); 
            if ($query) {
			    header('Location:index_senyawa.php');
		    }else{
			    die("Gagal menyimpan perubahan...");
		    }
        
	}else{
		die("Akses dilarang");
	}
?>