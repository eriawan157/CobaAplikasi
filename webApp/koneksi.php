<?php
	 $DB_NAME = "aplikasi_bnn";
     $DB_USER = "root";
     $DB_PASS = "";
     $DB_SERVER_LOC = "localhost";
 

     $conn = mysqli_connect($DB_SERVER_LOC,$DB_USER,$DB_PASS,$DB_NAME);
	if (!$conn) {
		die("Gagal terhubung dengan database: ".mysqli_connect_error());
    }

	

	
?>