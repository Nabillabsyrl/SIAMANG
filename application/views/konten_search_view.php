<div id="single-project">

                    <?php foreach($acara as $a)
                        { ?>
                    <div id="slidingDiv<?php echo $a->id_acara; ?>" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo base_url('uploads/');?><?php echo $a->gambar; ?>" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $a->nama_acara; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nama</span><?php echo $a->nama_acara; ?></div>
                                    <div>
                                        <span>Tanggal</span><?php echo $a->tgl_acara; ?></div>
                                    <div>
                                        <span>Waktu</span><?php echo $a->waktu_acara; ?></div>
                                    <div>
                                        <span>Alamat</span><?php echo $a->alamat_acara; ?></div>
                                </div>
                                <p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                <!-- Start details for portfolio project 1 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <?php foreach($acara as $a)
                        { ?>
                            
                            <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="<?php echo base_url();?>uploads/<?php echo $a->gambar; ?>" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $a->id_acara; ?>">
                                    <h3><?php echo $a->nama_acara; ?></h3>
                                </a>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>