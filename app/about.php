<?php 
    session_start();

    if (empty($_SESSION['user'])) {
        header("location: login.php");
        exit;
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        body{
            background-color : #5F9EA0;
        }
    </style>
</head>

<?php include 'view/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!------------------------->

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="font-weight-bold text-primary" style="margin-bottom: -5px;">Identitas Diri</h5>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../assets/img/foto formal.jpg" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                                <h5 class="card-title mt-3">Idham Firhanudin</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">NIM</h6>
                                    <small>6701194085</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">Tanggal Lahir</h6>
                                    <small>2 Maret 2001</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">Email</h6>
                                    <small>idhamfirhanudin001@gmail.com</small>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">Jenis Kelamin</h6>
                                    <small>Laki-laki</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">Alamat</h6>
                                    <small>Kuningan Jawa Barat</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="font-weight-bold text-dark">No Telp</h6>
                                    <small>08565603306568</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------->

</div>
<!-- /.container-fluid -->

<?php include 'view/footer.php'; ?>

</html>