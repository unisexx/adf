<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="<?php echo base_url(); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $template['title'] ?></title>
    <?php echo $template['metadata'] ?>
    <?php include "_css.php";?>
</head>
<body>
    <?php include "_header.php";?>
    
    <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="span8">
          <div class="hero-content">
            <h1>Adfree</h1>
            <p>ฟรีโพสต์ ฟรีประกาศ ซื้อ-ขายสินค้า ตลาดออนไลน์ โปรโมทสินค้าฟรี ลงโฆษณาฟรี</p>
            <div class="actions">
              <a class="btn btn-primary btn-large" href="users/register">
                <i class="icon-user icon-2x pull-left"></i> สมัครสมาชิกเพื่อ<br>ลงประกาศฟรี</a>
            </div>
            <div class="shameless-self-promotion">
              Adfree.in.th เป็นเว็บไซต์ให้บริการฟรีประกาศ, คุณสามารถจัดการประกาศต่างๆของคุณเองได้อย่างง่ายดายเพียงสมัครสมาชิกกับเรา
            </div>
          </div>
        </div>
        <div class="span4">
          <div id="iconCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item"><div><i class="icon-flag"></i></div></div>
              <div class="item"><div><i class="icon-cloud-download"></i></div></div>
              <div class="item"><div><i class="icon-lightbulb"></i></div></div>
              <div class="item"><div><i class="icon-group"></i></div></div>
              <div class="item"><div><i class="icon-ambulance"></i></div></div>
              <div class="item"><div><i class="icon-star-empty"></i></div></div>
              <div class="item"><div><i class="icon-envelope"></i></div></div>
              <div class="item"><div><i class="icon-coffee"></i></div></div>
              <div class="item"><div><i class="icon-medkit"></i></div></div>
              <div class="item"><div><i class="icon-book"></i></div></div>
              <div class="item"><div><i class="icon-fighter-jet"></i></div></div>
              <div class="item active"><div><i class="icon-edit"></i></div></div>
              <div class="item"><div><i class="icon-search"></i></div></div>
              <div class="item"><div><i class="icon-beer"></i></div></div>
              <div class="item"><div><i class="icon-quote-left"></i></div></div>
              <div class="item"><div><i class="icon-stethoscope"></i></div></div>
              <div class="item"><div><i class="icon-heart-empty"></i></div></div>
              <div class="item"><div><i class="icon-thumbs-up"></i></div></div>
            </div>
    
            <a class="carousel-control left" href="#iconCarousel" data-slide="prev">
              <i class="icon-arrow-left"></i></a>
            <a class="carousel-control right" href="#iconCarousel" data-slide="next">
              <i class="icon-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <div id="social-buttons">
      <div class="container">
        <!-- <span class="watch">
          <a class="btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github icon-large"></i> Watch</a>
          <a id="watchers" class="count btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome">12851</a>
        </span>
        <span class="fork">
          <a class="btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github icon-large"></i> Fork</a>
          <a id="forks" class="count btn btn-mini" href="#">1372</a>
        </span>
        <span class="follow">
          <a class="btn btn-mini" href="http://twitter.com/fortaweso_me/" target="_blank"><i class="icon-twitter icon-large"></i> Follow @fortaweso_me</a>
          <span id="followers" class="count btn btn-mini">3890</span>
        </span> -->
      </div>
    </div>
    
    
    <div class="container">
        <?php echo modules::run('adfrees/inc_home'); ?>
        <?php echo modules::run('adfrees/inc_home_category'); ?>
    </div>
    <?php include "_footer.php";?>
    <?php include "_script.php";?>
</body>
</html>