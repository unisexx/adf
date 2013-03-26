<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="home" target="_blank">Adfree</a>
      <div class="nav-collapse collapse">
        <p class="navbar-text pull-right">
          Logged in as <?php echo user()->username ?> | <a href="users/admin/auth/logout" onclick="return confirm('Do you want to logout?')" >Logout</a>
        </p>
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>