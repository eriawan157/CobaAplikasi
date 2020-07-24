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
            <img src="../images/logo.png" alt="" style="height: 45px;">
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
                <h1><center>Form Pengaduan<center></h1>
                <br>
            </header>
            <div class="row" style="margin-top:2%;">
                <div class="col-7">
            <form action="proses-tambah-aduan.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group">
                        <label for="form-field-select-3">Nomor KTP <font color="red">*</font></label>
                        <div>
                            <input type="text" id="no_ktp" name="no_ktp" placeholder="Nomor KTP" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Nama Lengkap <font color="red">*</font></label>
                        <div>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Tempat lahir <font color="red">*</font></label>
                        <div>
                            <input type="text" id="tempat_lhr" name="tempat_lhr" placeholder="Tempat lahir" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Tanggal Lahir <font color="red">*</font></label>
                        <div>
                            <input type="date" id="tgl_lhr" name="tgl_lhr" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Alamat <font color="red">*</font></label>
                        <div>
                            <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Contact Person <font color="red">*</font></label>
                        <div>
                            <input type="text" id="no_hp" name="no_hp" placeholder="Nomor Handphone" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Pekerjaan <font color="red">*</font></label>
                        <div>
                            <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Nomor Handphone" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Tanggal Kejadian <font color="red">*</font></label>
                        <div>
                            <input type="date" id="tgl_kejadian" name="tgl_kejadian" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form-field-select-3">Waktu <font color="red">*</font></label>
                        <div>
                            <input type="time" name="waktu" required>                        
                        </div> 
                    <div class="form-group">
                        <label for="form-field-select-3">Isi Pengaduan <font color="red">*</font></label>
                        <div>
                            <textarea class="form-control" name="isi_pengaduan" placeholder="Isi Pengaduan" required></textarea>
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
                    <p class="card-text">Data pengaduan yang Anda isi pada form ini akan dijamin kerahasiaannya.</p>
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