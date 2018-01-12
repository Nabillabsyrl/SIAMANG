<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           Pegawai Netra
          </div>
          <div class="row">
            <div class="col-xs-12">
                 <?php $message = $this->session->flashdata('message');
                        if (!empty($message)) 
                            echo "<div class='alert alert-info'>$message</div>"
                        ?>
                   <div class="box box-danger" style="padding: 26px">
            <div class="box-body table-responsive">
            <div class="row">
            <div class="col-md-12">
            <div style="padding: 10px">

                <?php echo anchor(site_url('lokasi/create'),'Create', 'class="btn btn-primary"'); ?>
           </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
        <th>Id Lokasi</th>
		<th>Nama Lokasi</th>
		<th>Action</th>
        </thead>
            </tr>
            <?php
            foreach ($lokasi_data as $lokasi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $lokasi->id_lokasi ?></td>
			<td><?php echo $lokasi->nama_lokasi ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('lokasi/read/'.$lokasi->id_lokasi),'<div class="btn btn-info"> <div class="fa fa-sticky-note-o"> </div></div>'); 
				echo '  '; 
				echo anchor(site_url('lokasi/update/'.$lokasi->id_lokasi),'<div class="btn btn-success"> <div class="fa fa-pencil"> </div></div>'); 
				echo '  '; 
				echo anchor(site_url('lokasi/delete/'.$lokasi->id_lokasi),'<div class="btn btn-danger"> <div class="fa fa-trash"> </div></div>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
           </tbody>
        </table>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>