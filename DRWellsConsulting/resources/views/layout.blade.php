<!DOCTYPE html>
<html lang="en">


<head>
  <title>Dave & Rick Wells Consulting</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/font-awesome-all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html"><img class="img-fluid" src="img/drwLogo.png"/></a>
          <button class="navbar-toggler ml-auto mr-3" type="button" data-toggle="collapse" data-target="#MyNavbar" aria-controls="MyNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="MyNavbar">
          <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item <?php echo ($page == "home" ? "active" : "")?>">
              <a class="nav-link" href="home"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item <?php echo ($page == "services" ? "active" : "")?>">
              <a class="nav-link" href="services"><i class="fas fa-clipboard-list"></i> Services</a>
            </li>
            <li class="nav-item <?php echo ($page == "contact" ? "active" : "")?>">
              <a class="nav-link" href="contact"><i class="fas fa-phone"></i> Contact Us</a>
            </li>
          </ul>
        </div>
    </nav>

    @yield ('content')

<!-- Footer -->
    <hr>
    <div class="container-fluid footer-style background-color-secondary-2-2 color-primary-3">
    	<div class="row">
    		<div class="col-sm">
    			<address>
    			David & Rick Wells Consulting<br/>
    			<a href="mailto:ricwells@gmail.com">ricwells@gmail.co</a><br/>
    			999-555-1111<br/>
    			1236 Canvasback CT.<br/>
    			Fort Collins, CO 80525
    			</address>
    		</div>
    		<div class="col-sm" style="text-align: right;">
    			<span style="font-size: xx-large;">Social Media</span><br/>
    			<div class="social" >
    				<i class="fab fa-facebook-square"></i>
    				<i class="fab fa-twitter-square"></i>
    				<i class="fab fa-instagram"></i>
    			</div>
    		</div>
    	</div>
    	<div style="text-align: center">
    		&copy; 2020 David & Rick Wells Consulting
    	</div>
    </div>
<!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrdave.t.wells@gmail.comap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
