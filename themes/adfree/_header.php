<header>
<!-- Navbar
================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- logo -->
            <a class="brand logo" href="home">
            <!-- <img src="assets/img/logo.png" alt=""> -->
                <i class="icon-bullhorn icon-2x pull-left"></i>
                <strong>Adfree</strong><br>ซื้อง่าย ขายคล่อง
            </a>
            <div class="head-member">
            <?php if(is_login()):?>
                <div class="btn-group pull-right">
                  <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <?php //echo thumb(avatar(user_login()->id),20,20,1,"")?> <?php echo user_login()->username ?>
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- dropdown menu links -->
                    <li><a href="myaccounts/profile">แก้ไขข้อมูล</a></li>
                    <li><a href="users/logout">ออกจากระบบ</a></li>
                    <?php if(user_login()->level_id == '1'):?>
                        <li><a href="admin" target="_blank">จัดการหลังบ้าน</a></li>
                    <?php endif;?>
                  </ul>
                </div>
            <?php else:?>
                <form class="navbar-form pull-right" method="post" action="users/login">
                  <input class="span2" type="text" name="username" placeholder="Username">
                  <input class="span2" type="password" name="password" placeholder="Password">
                  <button type="submit" class="btn">ล็อกอิน</button>
                  <a class="btn" href="users/register">สมัครสมาชิก</a>
                </form>
            <?php endif;?>
            </div>
            
            <!-- end logo -->
            <!-- top menu -->
            <!-- <div>
                <nav>
                <ul class="nav topnav">
                    <li class="dropdown success">
                        <a href=""><i class="icon-home icon-white"></i> หน้าแรก</a>
                    </li>
                    <li class="dropdown primary">
                    <a href="#"><i class="icon-star icon-white"></i> Features</a>
                    <ul class="dropdown-menu">
                        <li><a href="overview.html">Overview</a></li>
                        <li><a href="scaffolding.html">Scaffolding</a></li>
                        <li><a href="base-css.html">Base CSS</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="javascript.html">Javascripts</a></li>
                        <li class="dropdown"><a href="#">3rd level</a>
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Example menu</a></li>
                            <li><a href="#">Example menu</a></li>
                            <li><a href="#">Example menu</a></li>
                        </ul>
                        </li>
                    </ul>
                    </li>
                    <li class="dropdown danger">
                    <a href="#"><i class="icon-leaf icon-white"></i> Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Our services</a></li>
                        <li><a href="pricingtable.html">Pricing table</a></li>
                        <li><a href="faq.html">F.A.Q</a></li>
                        <li><a href="fullwidth.html">Fullwidth</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                    </li>
                    <li class="dropdown warning">
                    <a href="#"><i class="icon-camera icon-white"></i> Portfolio</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Portfolio type 1</a>
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="portfolio-alt1-2cols.html">2 columns</a></li>
                            <li><a href="portfolio-alt1-3cols.html">3 columns</a></li>
                            <li><a href="portfolio-alt1-4cols.html">4 columns</a></li>
                        </ul>
                        </li>
                        <li class="dropdown"><a href="#">Portfolio type 2</a>
                        <ul class="dropdown-menu sub-menu">
                            <li><a href="portfolio-alt2-2cols.html">2 columns</a></li>
                            <li><a href="portfolio-alt2-3cols.html">3 columns</a></li>
                            <li><a href="portfolio-alt2-4cols.html">4 columns</a></li>
                        </ul>
                        </li>
                        <li><a href="portfolio-alt3.html">Portfolio type 3</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                    </ul>
                    </li>
                    <li class="dropdown info">
                    <a href="#"><i class="icon-bullhorn icon-white"></i> Blog</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                        <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                    </ul>
                    </li>
                    <?php if(is_login()):?>
                        <li class="dropdown inverse">
                        <a href="#"><i class="icon-user icon-white"></i> <?php echo user_login()->username ?></a>
                        <ul class="dropdown-menu">
                            <li><a href='myaccounts/profile'>แก้ไขข้อมูล</a></li>
                            <li><a href="users/logout">ล็อกเอาท์</a></li>
                            <?php if(user_login()->level_id == '1'):?>
                                <li><a href="admin" target="_blank">จัดการหลังบ้าน</a></li>
                            <?php endif;?>
                        </ul>
                        </li>
                    <?php else:?>
                        <li class="dropdown inverse">
                        <a href="#"><i class="icon-user icon-white"></i> สมาชิก</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" href='#signin'>ล็อกอิน</a></li>
                            <li><a href="users/register">สมัครสมาชิก</a></li>
                        </ul>
                        </li>
                    <?php endif;?>
                </ul>
                </nav>
            </div> -->
            <!-- end menu -->
        </div>
    </div>
</div>
</header>