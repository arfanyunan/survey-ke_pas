<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

</head>

<body id="page-top">
<!-- Content Wrapper. Contains page content DONT DELETE THIS TAG-->
<div class="content-wrapper">
    <!-- Main content -->

    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h3 class="card-title"><i class="fas fa-user-tie"></i>Tabel Rekap Periode Survey Pasien <?= $periode; ?> </h3>
                        </div>
                        <hr>                        
                        <a class="btn btn-outline-primary" href="/survey/admin/" role="button">Kembali</a>                    
                        
                    </div>
                </div>
                <div class="card-body table-responsive-lg 7">
                    <table id="tabelsurvey" class="table table-ligh table-bordered table-striped table-hover table-sm dt-responsive nowrap" style="width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal Isi</th>
                                <th class="text-center">P1</th>
                                <th class="text-center">P2</th>
                                <th class="text-center">P3</th>
                                <th class="text-center">P4</th>
                                <th class="text-center">P5</th>
                                <th class="text-center">P6</th>
                                <th class="text-center">P7</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1;
                            foreach ($data_admin as $dt_admin) : ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td class="text-center"><?= $dt_admin['tgl_isi']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p1']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p2']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p3']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p4']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p5']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p6']; ?></td>
                                    <td class="text-center"><?= $dt_admin['p7']; ?></td>
                                </tr>
                            <?php $no++;
                            endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

</div><!-- /.container-fluid -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SURVEY SADEWA 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
</div>
<!-- /.content -->

</div> <!-- /.content-wrapper -->


    

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

    
    <script>
    $(() => {
        /* data tables ini dicode oleh fiddy dari dokumentasi dataTables */
        var title_excel = '<?=$title." ".$periode;?>'
        $("#tabelsurvey").DataTable({
            sort: false,
            "scrollX" : true,
            dom : "<'row'<'col-sm-12 col-md-2'l> <'col-sm-12 col-md-4'B> <'col-sm-12 col-md-4'f> > <'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons:[
                {
                    extend : 'excelHtml5',
                    title : title_excel
                },
                'copyHtml5'
            ]
        });
    });
</script>

</body>

</html>