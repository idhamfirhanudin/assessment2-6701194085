<?php 
    session_start();

    if (empty($_SESSION['user'])) {
        header("location: login.php");
        exit;
    }
    
    require '../config.php';

    $conn = mysqli_connect($host, $username, $password, $dbname);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data IP</title>

    <link rel="icon" type="image/png" href="../assets/img/tutwuri.jpg">

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<?php include 'view/header.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!------------------------->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data IP (Indeks Prestasi)</h6>
            </div>

            <div class="d-sm-flex align-items-center justify-content-between ml-4 mt-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-sm" >
                    <a href="tambah_ip.php" class="text-white">
                        <i class="fas fa-user-plus"></i>Tambah Data
                    </a>
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">IP</th>
                                <th class="text-center">Keterangan Smester</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            $sql = "SELECT * FROM ip";
                            $result = $conn->query($sql);
                            while ($row=$result->fetch_assoc()) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $row['jumlah_ip']; ?></td>
                                    <td><?= $row['keterangan']; ?></td>
                                    <td class="text-center">
                                        <a href="hapus_ip.php?id_ip=<?= $row["id_ip"]; ?>" onclick="return confirm('Yakin akan menghapus?')">
                                            <i class="fas fa-trash mr-3"></i>
                                        </a>
                                        <a href="edit_ip.php?id_ip=<?=$row['id_ip'] ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td> 
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!------------------------->

    </div>
    <!-- /.container-fluid -->     

<?php include 'view/footer.php'; ?>

</html>