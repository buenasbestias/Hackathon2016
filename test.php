<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
   <meta charset="utf-8">
   <title>:: Your Perfect Song For Today :: Koding Hackathon 2016</title>
   <link rel="canonical" href="" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Web App for the 2016 Koding Virtual Hackathon">
   <meta name="author" content="BuenasBestias">
   <link rel="icon" href="favicon.ico">
   <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
   <link href="css/ypsft-style.css" rel="stylesheet">
   <link href="css/responsive.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->
   <script src="js/vendor/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>
   <body>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center m-top-md">
            <h3>Hello!<br>We'll help you find</h3>
            <h1 class="m-top-lg">Your Perfect Song For Today</h1>
            <p class="m-top-lg">Just give us a tune with your clicks!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 m-top-md">
            <a href="#">
              <img src="img/blue-circle.png" class="img-responsive center-block hvr-pulse">
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="m-top-lg">Or if you like give us the BPM* of your choice:</p>
            <form>
              <div class="form-group">
                <input type="number" class="form-control center-block" id="beats_int" placeholder="e.g. 120">
                <button type="submit" class="ok hvr-pop"><i class="fa fa-check-circle-o"></i></button>
              </div>
            </form>
            <p class="txt-xs">*Beats Per Minute</p>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row section-results" id="results">
          <div class="col-lg-12 m-top-md text-center">
            <div class="row">
              <p><i class="fa fa-music"></i>&nbsp;&nbsp;<i class="fa fa-map-marker"></i>&nbsp;&nbsp;<i class="fa fa-umbrella"></i>&nbsp;&nbsp;<i class="fa fa-moon-o"></i>&nbsp;&nbsp;<i class="fa fa-sun-o"></i></p>
              <p>So, based on your tempo, location weather and time of the day<br>we thought you'd like to hear the next song:</p>
            </div>

            <div class="results m-top-lg">
              <a href="#">
                <p class="song">Somewhere over the rainbow<br><span class="author">by Israel Kamakawiwo'ole</span></p>
              </a>
            </div>

            <div class="row m-top">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="row">
                  <div class="col-lg-4">
                    <a href="#"><img src="img/logo-spotify.png"></a>
                  </div>
                  <div class="col-lg-4">
                    <a href="#"><img src="img/logo-itunes.png"></a>
                  </div>
                  <div class="col-lg-4">
                    <a href="#"><img src="img/logo-google-music.png"></a>
                  </div>
                </div>
              </div>
            </div>
            <p class="m-top">Here are a few facts about this beat:</p>
          </div>
        </div>

      <div class="fixed-to-bottom"></div>

      <div class="floating-logo"><a href="http://the.echonest.com/" target="_blank"><img src="img/logo-echonest-xs.png"></a></div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/vendor/ie10-viewport-bug-workaround.js"></script>
      <script src="js/dynamics.js" type="text/javascript"></script>
   </body>
</html>
