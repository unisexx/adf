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
	<section id="subintro">
        <div class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span8">
                        <h3><i class="m-icon-big-swapright m-icon-white"></i> ฟรีประกาศ</h3>
                        <p>
                            Overview of the template, its contents, and how to get started with scaffold template.
                        </p>
                    </div>
                    <div class="span4">
                        <div class="input-append">
                            <form class="form-search">
                                <input type="text" class="input-medium search-query">
                                <button type="submit" class="btn btn-inverse">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<div class="container">
      <?php echo $template['body'] ?>
      <?php include "_footer.php";?>
	</div>
<?php include "_script.php";?>
</body>
</html>