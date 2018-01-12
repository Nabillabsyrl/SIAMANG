
<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h1>WISATA DA' JEMBER</h1>
					<p>Ayo selami wisata menarik tentang Jember!</p>
				</div>
			</div>
                           

				<?php
					
					$i = 1; 
					
					shuffle($wisata);

					foreach ($wisata as $row) {
						if($row->kategori == 'Wisata'){
						echo '<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				 
				
				<a href="detail/'.$row->id_artikel.'" class="image full"><img src="'.base_url().'upload/'.$row->foto.'" class="img-responsive" style = "width: 350px; height: 200px"alt="sponsors"><p>'.$row->judul_artikel.'</p></a>

				</div>
				'; 	

				}	

				$i++;
			}
			
				?>
			
		</div>
	</div>
</section>

<div class="container" style="text-align: center;padding-bottom: 20px">
		<a href="<?php echo base_url();?>index.php/utama/" class="btn btn-danger">Back to Home</a>
</div>
<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>