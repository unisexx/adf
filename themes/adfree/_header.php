<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="">Adfree</a>
      <div class="nav-collapse collapse">
        <!-- <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul> -->
        <?php if(is_login()):?>
            <ul class="nav pull-right">
            <li><?php //echo thumb(avatar(user_login()->id),20,20,1,"style='margin-top:10px;'")?></li>
            <li><a rel="tooltip" data-placement="bottom" href="myaccounts/profile" data-original-title="แก้ไขข้อมูล"><?php echo user_login()->username ?></a></li>
            <li><a href="users/logout" rel="tooltip" data-placement="bottom" data-original-title="ออกจากระบบ">logout</a></li>
            </ul>
        <?php else:?>
            <form class="navbar-form pull-right" method="post" action="users/login">
              <input class="span2" type="text" name="username" placeholder="Username">
              <input class="span2" type="password" name="password" placeholder="Password">
              <button type="submit" class="btn">ล็อกอิน</button>
              <a href="users/register"><div class="btn">สมัครสมาชิก</div></a>
            </form>
        <?php endif;?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>