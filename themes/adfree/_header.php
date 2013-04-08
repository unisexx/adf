<header>
<!-- Navbar
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- logo -->
            <a class="brand logo" href="">
            <!-- <img src="assets/img/logo.png" alt=""> -->
                <i class="icon-bullhorn pull-left"></i> Adfree
            </a>
            
            <!-- top menu -->
                <nav>
                <ul class="nav topnav">
                    <!-- <li class="dropdown success">
                        <a href=""><i class="icon-home icon-white"></i> หน้าแรก</a>
                    </li> -->
                    <?php echo modules::run('adfrees/inc_header_category');?>
                    <?php echo modules::run('contents/inc_header_category');?>
                    <!-- <li class="dropdown warning">
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
                    </li> -->
                    <!-- <?php if(is_login()):?>
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
                    <?php endif;?> -->
                </ul>
                </nav>
            <!-- end menu -->
            
            <ul class="nav pull-right">
            <?php if(is_login()):?>
                <div class="btn-group">
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <?php // echo thumb(avatar(user_login()->id),20,20,1,"")?> <i class="icon-user icon-white"></i> <?php echo user_login()->username ?>
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- dropdown menu links -->
                    <li><a href="myaccounts/profile"><i class="icon-pencil"></i> แก้ไขข้อมูล</a></li>
                    <li><a href="myaccounts/adfree"><i class="icon-plus"></i> จัดการประกาศ</a></li>
                    <li class="divider"></li>
                    <li><a href="users/logout"><i class="icon-off"></i> ออกจากระบบ</a></li>
                    <?php if(user_login()->level_id == '1'):?>
                        <li class="divider"></li>
                        <li><a href="admin" target="_blank"><i class="icon-home"></i> จัดการหลังบ้าน</a></li>
                    <?php endif;?>
                  </ul>
                </div>
            <?php else:?>
                <li><a data-toggle="modal" href='#signin'>ล็อกอิน</a></li>
                <li><a href="users/register"> สมัครสมาชิก</a></li>
            <?php endif;?>
            </ul>
        </div>
    </div>
</div>
</header>