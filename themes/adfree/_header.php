<header>
<!-- Navbar
================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- logo -->
            <a class="brand logo" href="home">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Adfree</h1>
            </a>
            <!-- end logo -->
            <!-- top menu -->
            <div>
                <nav>
                <ul class="nav topnav">
                    <li class="dropdown success">
                    <a href="index.html"><i class="icon-home icon-white"></i> Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="index_alt1.html">Index alt 1</a></li>
                        <li><a href="index_alt2.html">Index alt 2</a></li>
                    </ul>
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
                    <li class="dropdown inverse">
                    <a href="#"><i class="icon-user icon-white"></i> สมาชิก</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog_left_sidebar.html">ล็อกอิน</a></li>
                        <li><a href="blog_right_sidebar.html">สมัครสมาชิก</a></li>
                    </ul>
                    </li>
                </ul>
                </nav>
            </div>
            <!-- end menu -->
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
        </div>
    </div>
</div>
</header>