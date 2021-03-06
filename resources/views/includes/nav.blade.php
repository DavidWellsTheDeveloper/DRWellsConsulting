<nav class="navbar navbar-expand-md fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <a class="navbar-brand" href="index.html"><img class="img-fluid" src="img/drwLogo.png"/></a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
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
