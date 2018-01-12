<!DOCTYPE html>

<html lang="en">
<head>

<title>Admin - Glindar da Jember</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/dataTables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>


<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Glinjar da Jember</a>
            </div>
            <!-- /.navbar-header -->

            <!--  -->
            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                    
                       <li>
                            <a href="<?php echo base_url('index.php/admin/dashboard')?>"><i class="fa fa-table fa-fw"></i> Data Artikel</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('index.php/admin/datauser')?>"><i class="fa fa-table fa-fw"></i> Data User</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin2')?>"><i class="fa fa-edit fa-fw"></i>Input</a>
                        </li>
                        <li>
                            <!-- <div class="container" style="text-align: center;padding-bottom: 20px"> -->
                            <h5 style="text-align: center;"> Have done? Click button to log out! </h5>
                            <a style="text-align: center;" href="<?php echo base_url();?>index.php/admin/logout/"">
                            <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-check"></i> </button>
                            </a>
                            <!-- </div> -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Form Input Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                      <form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/admin/simpan">
                                <div class="col-lg-6">
                         

                                    <?php

                    if(!empty($notif)){
                    echo '<div class="alert alert-danger">'.$notif.'</div>';
                    }
                    ?>
                                       
                                        <div class="form-group">
                                            <label>Judul artikel</label>
                                            <input type="text" name = "judul_artikel" id="judul_artikel" class="form-control" placeholder="Masukkan judul artikel" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" name = "lokasi" id="lokasi" class="form-control" placeholder="Masukkan lokasi artikel" required>
                                        </div>
                                       <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Tanggal artikel</label>
                                            <input name="tanggal_artikel" type = "date" id="tanggal_artikel" class="form-control" placeholder="Masukkan tanggal artikel" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Konten artikel</label>
                                            <textarea id="konten" name="konten" class="form-control" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Kategori </label>
                                            <select id="kategori" name="kategori" class="form-control" required>
                                                <option value="Wisata">Wisata</option>
                                                <option value="Makanan">Kuliner</option>
                                                <option value="Penginapan">Penginapan</option>
                                            </select>
                                        </div>                          
                                        <div class="form-group">
                                            <label>Pilih foto</label>
                                            <input name="foto" id="foto" type="file" required>
                                        </div>
                                        
                                   <input type="submit" name="submit" class="form-control" id="submit" value="Bagikan">

                                    
                                </div>
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Forms -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url();?>assets/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Forms - Use for reference -->

</body>

</html>
