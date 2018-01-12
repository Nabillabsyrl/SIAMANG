
 <style>
    #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 10px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    
    }

    #myUL {
        /* Remove default list styling */
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #myUL li a {
        border: 1px solid #ddd; /* Add a border to all links */
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6; /* Grey background color */
        padding: 12px; /* Add some padding */
        text-decoration: none; /* Remove default text underline */
        font-size: 18px; /* Increase the font-size */
        color: black; /* Add a black text color */
        display: block; /* Make it into a block element to fill the whole list */
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee; /* Add a hover effect to all links, except for headers */
    }
    .wrapper {
      display: grid;
      grid-template-columns: repeat(8, 1fr);
      grid-gap: 10px;
      grid-auto-rows: 100px;
      grid-template-areas: 
        "a a a a b b b b"
        "a a a a b b b b"
        "c c c c d d d d"
        "c c c c d d d d";
      align-items: start;
    }
    .item1 {
      grid-area: a;
    }
    .item2 {
      grid-area: b;
    }
    .item3 {
      grid-area: c;
    }
    .item4 {
      grid-area: d;
    }
  </style>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Glindar da Jember</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script>
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin.css"> -->
	<!-- Main css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
     ============================== -->
     <div class="preloader">

     	<div class="sk-rotating-plane"></div>

     </div>


<!-- =========================
     NAVIGATION LINKS     
     ============================== -->
     <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     	<div class="container">

     		<!-- navbar header -->
     		<div class="navbar-header">
     			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     				<span class="icon icon-bar"></span>
     				<span class="icon icon-bar"></span>
     				<span class="icon icon-bar"></span>
     			</button>
     			<a href="#" class="navbar-brand">GLINJAR DA JEMBER</a>
     		</div>

     		<div class="collapse navbar-collapse">

     			<ul class="nav navbar-nav navbar-right">
     				<li><a href="<?php echo base_url('index.php/utama/')?>" class="smoothScroll">Home</a></li>
     				
     				<li><a href="<?php echo base_url('index.php/utama/wisata')?>" class="smoothScroll">Wisata</a></li>
     				<li><a href="<?php echo base_url('index.php/utama/kuliner')?>" class="smoothScroll">Kuliner</a></li>
     				<li><a href="<?php echo base_url('index.php/utama/penginapan')?>" class="smoothScroll">penginapan</a></li>
     				

     				
     			</ul>

     		</div>

     	</div>
     </div>


<!-- =========================
    INTRO SECTION   
    ============================== -->
    <section id="intro" class="parallax-section">
    	<div class="container">
    		<div class="row">

    			<div class="col-md-12 col-sm-12">
    				<h1 class="wow fadeInUp" data-wow-delay="1.6s">Informasi da Jember</h1>
    				<!--<a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LEARN MORE</a>-->
<!-- 				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
-->			</div>


</div>
</div>
</section>
<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			
				</div>
</div>
</section>

<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2>ARTIKEL</h2>
					<p>Ayo selami informasi menarik tentang Jember!</p>
				</div>
			</div>
            <div class="input-group col-md-12">
			

			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."/>
             <span class="input-group-btn">
                        <button style="height: 48px" class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
            </div>
			<?php
					echo '<ul id="myUL">';
					$i = 1;
					
					shuffle($artikel);

					foreach ($artikel as $row) {
						echo '<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<div> <a href="detail/'.$row->id_artikel.'" class="image full"> <img src="'.base_url().'upload/'.$row->foto.'" style = "width: 350px; height: 200px"  class="img-responsive" alt="sponsors"> 			<p>'.$row->judul_artikel.'</p> 

				</a> </div>

				</div>
				'; 

				

					}
					echo '</ul>';
				?>
			
		</div>
	</div>
</section>


<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2017 - Glinjar da Jember</a></p>

				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<!-- <li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li> -->
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
     ============================== -->
     <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
     <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url();?>assets/js/jquery.parallax.js"></script>
     <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
     <script src="<?php echo base_url();?>assets/js/smoothscroll.js"></script>
     <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
     <script src="<?php echo base_url();?>assets/js/custom.js"></script>

 </body>
 </html>
 <script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    div = ul.getElementsByTagName('div');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < div.length; i++) {
        a = div[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}
</script>