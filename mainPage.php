<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>
<?php include('nav.php'); ?>

<!-- Start Page Content -->

<!-- Start Carousel -->
<!-- Let's agree on a aspect ratio for images in the carousel, and stick to it.
This may involve modifying some images to make them fit. I'd opt for a very
wide ratio so we can have a 100% width on the splash page images. For now 1:2 -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/20180915-167.jpg" alt="chicago skyline">
    </div><!-- End active -->
    <div class="item">
      <img src="img/20180915-179.jpg" alt="chicago bridge">
    </div><!-- End active -->
    <div class="item">
      <img src="img/20180916-129.jpg" alt="chicago Tom">
    </div><!-- End active -->
  </div>
  <!-- Start Slider Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of Carousel -->
<p>This is a paragraph</p>
<!-- End Page Content -->


<?php include('footer.php'); ?>
</body>
</html>
