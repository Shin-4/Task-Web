<!-- Autor Dhenys Garnesyah -->
<!--Thanks for framework-->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title Bar -->
<title>Mo Pic - Success</title>
<!-- End Title Bar -->
<!--Icon Bar-->
<link rel="shortcut icon" href="images/favicon.png">
<!--End Icon Bar-->
<!-- Meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- End Meta -->
<!-- CSS and Bootstrap -->
<link rel="stylesheet" href="script/css/style.css">
<link rel="stylesheet" href="script/framework/bootstrap.min.css">
<link rel="stylesheet" href="script/framework/font-awesome.min.css">
<!-- End CSS and Bootstrap -->
</head>
<body>
<!-- Navigation -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="picture.php">Picture</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="help.php">Help</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- End Navigation -->
<!-- Title -->
<section id="home" class="main-home parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h2><b><center>Send Success</center></b></h2>
      </div>
    </div>
  </div>
</section>
<!-- End Title-->
<!-- Contact -->
<section id="contact">
  <div class="container">
      <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
              <h2>View you send</h2>
              <p>View you send message to a ask.</p>
                <div class="col-md-4 col-sm-4">
                  <div class="form-control">Name : <?php echo $_POST ["name"];?></div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-control">Email : <?php echo $_POST ["email"];?></div>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="form-control">Subject : <?php echo $_POST ["subject"];?></div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-control">Message : <?php echo $_POST ["message"];?></div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <a href="index.php" class="btn btn-default">Back to home</a>
                </div>
            </div>
          </div>
        </div>
</section>

<!-- End Contact -->
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="footer-copyright">
        <center>&copy 2019 Mo Pic</center>
        <div class="col-md-12 col-sm-12">
          
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->
<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
<!-- End Back top -->
<!-- Java -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/custom.js"></script>
<!--End Java-->
</body>
</html>