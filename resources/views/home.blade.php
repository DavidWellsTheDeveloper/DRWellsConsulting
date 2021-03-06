@extends ('layout')

@section ('content')
<?php $page = "home" ?>
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
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('img/carousel/andreas-klassen-gZB-i-dA6ns-unsplash.jpg')}}" alt="chicago skyline">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carousel/christina-wocintechchat-com-9-ohfp-Dicg-unsplash.jpg')}}" alt="chicago bridge">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carousel/danielle-macinnes-IuLgi9PWETU-unsplash.jpg')}}" alt="chicago Tom">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carousel/florian-klauer-mk7D-4UCfmg-unsplash.jpg')}}" alt="chicago Tom">
    </div>
    <div class="carousel-item">
      <img src="{{url('img/carousel/freddie-marriage-vSchPA-YA_A-unsplash.jpg')}}" alt="chicago Tom">
    </div>
  </div>
  <!-- Start Slider Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of Carousel -->

<div class="parallax pb-3">
  <h1 class="text-center py-3 semi-trans">Mobile First Design</h1>
  <div class="container-fluid">
    <div class="row py-5 align-items-center justify-content-around">
      <div class="col-sm-6 col-lg-4">
        <img src="img/2-phones.png" class="img-fluid" alt="">
      </div>
      <div class="col-sm-12 col-lg-7 m-3 text-center">
        <div class="semi-trans p-5">
          <h3><em>Mobile internet consumption has grown over 500% since 2011.</em></h3>
        </div>
      </div>
    </div>
    <div class="row justify-content-around">
      <div class="col-11 card semi-trans text-center p-4">
        <h2 class="card-title">Responsive Design</h2>
        <p class="card-text">In 2019 mobile devices accounted for 51% of all
          web traffic worldwide. You need a website that looks great for all
          of your visiters. If you're looking to create a new website or web
          application, you need to be thinking of your audience! For far too
          long mobile websites were an afterthought, when designing content for
          the web. Mobile first content should be viewed as a necessity from
          the begining of the design process.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row mt-3 mb-4">
      <div class="col-lg-4 attraction">
        <!-- px-3 pb-3 text-white bg-dark text-center -->
        <div class="card">
          <span><i class="fas fa-crosshairs"></i></span>
          <h3>Reach Your Audience</h3>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="col-lg-4 attraction">
        <div class="card">
          <span style="font-size: 5em;"><i class="fas fa-universal-access"></i></span>
          <h3>Be Accessible</h3>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="col-lg-4 attraction">
        <div class="card">
          <span style="font-size: 5em;"><i class="fas fa-chart-line"></i></span>
          <h3>Attract Business</h3>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Start accordion -->
  <div class="accordion" id="accordionExample">
    <div class="card">
      <button class="card-header btn collapsed" type="button"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne">
        Collapsible Group Item #1
      </button>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <button class="card-header btn collapsed" type="button"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" id="headingTwo">
        Collapsible Group Item #2
      </button>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <button class="card-header btn collapsed" type="button"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" id="headingThree">
        Collapsible Group Item #3
      </button>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
  </div>
  <!-- End accordion -->
  <!-- End Page Content -->

  @endsection
