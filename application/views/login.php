
<!DOCTYPE html>
<html style="background-image: url(<?php echo base_url();?>assets/css/4.jpg)">
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="">
  

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body style="background-image: url(<?php echo base_url();?>assets/css/4.jpg)">
  
<div class="container">
  <div class="info">
    <h1 style="margin: 0 0 15px;
    margin-bottom: 30px;
    padding-bottom: px;
    padding: 2;
    font-size: 60px;
    font-weight: 200;
    FONT-FAMILY: fantasy;"> LOGIN PAGE </h1>

   <!-- <span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Billa</a></span> -->
   <span> </span>
  </div>
</div>          
<div class="form">


  <div class="thumbnail"><img src="<?php echo base_url();?>assets/logofix.png"/></div>
           <div class="alert"> 

            <?php
                    if (!empty($notif))
                    {
                    echo '<div class="alert alert-danger">';
                    echo $notif;
                    echo '</div>';
                    }
                    ?>
</div>
  <form role="form" method="post" class="register-form" action="<?php echo base_url();?>index.php/admin/login">

    <!--<input type="text" placeholder="name" class="input_with_text"/>
    <input type="password" placeholder="password" class="input_with_text"/>
    <input type="text" placeholder="email address" class="input_with_text"/>
    <button>create</button>-->

<div class="footer"></div>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" role="form" method="post" action="<?php echo base_url();?>index.php/admin/login">
    
    <input type="text"  class="form-control" placeholder="Username" name="username" class="input_with_text" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
    <input type="password" class="form-control" placeholder="Password" name="password" class="input_with_text" />

    <button type="submit" name="submit" class="button">Login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/js/index.js"></script>

</body>
</html>
