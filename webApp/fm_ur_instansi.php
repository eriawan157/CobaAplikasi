<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem BNN Kabupaten Kediri</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color:	#F0FFFF">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" style="height: 45px;">
            </a>
            <a class="navbar-brand" href="index.php">
            Kabupaten Kediri
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Permohonan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="fm_sosialisasi.php">Sosialisasi</a>
                        <a class="dropdown-item" href="fm_audiensi.php">Audiensi</a>
                        <a class="dropdown-item" href="fm_ur_pribadi.php">Tes Urine Pribadi</a>
                        <a class="dropdown-item" href="fm_ur_instansi.php">Tes Urine Instansi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rehabilitasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="fm_hukum.php">Proses Hukum</a>
                        <a class="dropdown-item" href="fm_sk_pribadi.php">Sukarela Pribadi</a>
                        <a class="dropdown-item" href="fm_sk_instansi.php">Sukarela Instansi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fm_pengaduan.php">Pengaduan</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="background-color:white; margin-top:6%; margin-bottom:10%;">
            <header>
            <br>
                <h1><center>Form Permohonan Tes Urine<center></h1>
                <h2><center>Instansi<center></h2>
            <br>
            </header>
            <div class="row" style="margin-top:2%;">
                <div class="col-7">
            <form action="proses-tambah-uri.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group">
                        <label for="form-field-select-3">Nama Perusahaan / Instansi<font color="red">*</font></label>
                        <div>
                            <input type="text" id="nama_instansi" name="nama_instansi" placeholder="Nama Perusahaan / Instansi" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Nama Pemohon <font color="red">*</font></label>
                        <div>
                            <input type="text" id="nama_pemohon" name="nama_pemohon" placeholder="Nama Pemohon" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Alamat<font color="red">*</font></label>
                        <div>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" required></textarea>
                        </div>
                    </div>        
                    <div class="form-group">
                        <label for="form-field-select-3">Tanggal Pemeriksaan<font color="red">*</font></label>
                        <div>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Waktu Pemeriksaan <font color="red">*</font></label>
                        <div>
                            <input type="time" name="waktu" required>                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Contact Person <font color="red">*</font></label>
                        <div>
                            <input type="text" id="nomor_hp" name="nomor_hp" placeholder="Nomor Handphone" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Tempat Lahir <font color="red">*</font></label>
                        <div>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Jumlah Peserta <font color="red">*</font></label>
                        <br>
                        <label for="form-field-select-3">Laki-laki&emsp;&emsp;&emsp;
                                                        &emsp;&nbsp;Perempuan</label><br>
                            <input class="col-md-2" type="number" id="jml_laki" name="jml_laki" placeholder="0" class="form-control"/>
                            <input class="col-md-2" type="number" id="jml_perempuan" name="jml_perempuan" placeholder="0" class="form-control"/><br>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Lokasi<font color="red">*</font></label>
                        <div>
                            <textarea class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi"></textarea>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="form-field-select-3">Lampiran Foto Surat<font color="grey">*max size = 1 Mb</font></label>
                        <div>
                            <input type="file" id="lampiran" name="lampiran" class="form-control"/>
                        </div>
                    </div>
                    <div class="panel-footer">
                                <button type="submit" name="tambah" class="btn btn-info"><span class="glyphicon glyphicon-send"> Kirim</button>
                                <button type="reset" onclick="printDiv('print')" class="btn btn-success pull-center_from_kirim"><i class="fa fa-times"></i> Batal
                    </div>
                </fieldset>
            </form>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="card">
                <h5 class="card-header">Petunjuk</h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">Semua data yang ada di form Pemohon harus diisi !</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
                </div>
            </div>
            </div>
            
        </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue" style="background-color:	#A1A4C7">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> PSDKUPOLINEMADIKEDIRI</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>