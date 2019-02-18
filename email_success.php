<?php

$Mail = $_POST['email'];
$name = $_POST['name'];
$client_mail = "fahad.mustafa0012@gmail.com";
$date = date('Y/m/d H:i:s');
$msg = $_POST['message'];

if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['message']) || empty($_POST['name']))
{
	header("Location: error.html");
}
else{
}

$full_msg = array("Morse Security - New Email\n
                    Email from : ", $name , 
                "\nSender Email : ", $Mail, 
                "\nDate : ", date,
                "\nMessage : \n", $msg);

mail($client_mail, "Morse Security - New Email", implode("\r\n", $full_msg));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morse - Cyber Security</title>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
      </head>
      <body id="top">
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="index.html">Back to Index<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown"><span style="color: white;">Morse</span><span> Security</span></h1>
                  <p class="animated fadeInUp delay-05s"><span style="color: white;">Home -><em> Contact</em></span></p>
                </div>
              </div>
              
            </div>
          </section>
        </header>

        <section class="subscribe text-center">
            <div class="container">
              <h1><i class="fa fa-paper-plane"></i><span>Email Sent</span></h1>
            </div>
        </section>
        <div class="ignite-cta text-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h1><span style="color: white">The Operation Completed successfully.</span></h1>        
                      <a href="index.html" class="ignite-btn">Back to Index</a>
                    </div>
                  </div>
                </div>
        </div>
        
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6 credit">
                <p>All rights Reserved | Morse Security</a></p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
