
   <body>
        <section id="main-content">
        <section class="wrapper">
        <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
           <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        PEGAWAI NETRA
                    </header>
                    <div class="panel-bod table-responsive">
                    <div class="position-left">
                    <div class="panel-body">
                    <div class="row">

        <form role="form" enctype="multipart/form-data" action="<?php echo $action; ?>" method="post" id="select">
       </div>

	    <div class="form-group">
            <label for="varchar">Nama Lokasi <?php echo form_error('nama_lokasi') ?></label>
            <input type="text" class="form-control" name="nama_lokasi" id="nama_lokasi" placeholder="Nama Lokasi" value="<?php echo $nama_lokasi; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Id Lokasi <?php echo form_error('id_lokasi') ?></label>
            <input type="text" class="form-control" name="id_lokasi" id="id_lokasi" placeholder="ID Lokasi" value="<?php echo $id_lokasi; ?>" />
        </div>

	       <button type="submit" class="btn btn-primary"><div class="fa fa-check"><?php echo $button ?></button> 
        <a href="<?php echo site_url('lokasi') ?>" class="btn btn-default">Cancel</a>
    </div>
    </form>
       </section>
</section>
</div>
