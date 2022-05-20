<!-- Autor Dhenys Garnesyah -->
<!--Thanks for framework-->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title Bar -->
<title>Mo Pic - About</title>
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
        <li class="active"><a href="about.php">About</a></li>
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
        <h2><b><center>About Us</center></b></h2>
      </div>
    </div>
  </div>
</section>
<!-- End Title-->
<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-sm-12">
        <div class="col-md-6 col-sm-6">
          <img src="images/autor2.jpg" class="img-responsive" alt="About Image">
        </div>
        <div class="col-md-6 col-sm-6">
          <h3>Founder</h3>
          <p>Hello i'm the founder of community <b>Mo pic</b>, my name is dhenys, <br>i was a studnet, i started this community aimed to make friends who want to learn design, to learn in collage or school design, if you are interested to join, join right now</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About -->
<!-- Contact -->
<section id="contact">
  <div class="container">
      <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
              <h2>Contact Us</h2>
              <p>Send message to a ask,we will answer the question, it takes three days to wait. </p>
              <form action="send.php" method="post">
                <div class="col-md-4 col-sm-4">
                  <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-md-4 col-sm-4">
                  <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-4 col-sm-4">
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="col-md-12 col-sm-12">
                  <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12 col-sm-12">
                  <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                </div>
              </form>
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