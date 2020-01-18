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
