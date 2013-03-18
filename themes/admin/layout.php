<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<title><?php echo $template['title']; ?></title> 
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<?php include_once '_css.php'; ?>
		<?php include_once '_script.php'; ?>
	</head>
	<body>
        <?php include_once '_header.inc.php'; ?>
        <div class="container-fluid">
          <div class="row-fluid">
            <div id="menu" class="span3">
              <div class="sidebar-nav bs-docs-sidebar">
                  <?php include_once '_menu.inc.php'; ?>
              </div><!--/.well -->
            </div><!--/span-->
            
            <div class="span9">
              <div class="row-fluid" style="padding-top:10px;">
                <?php echo $template['body']; ?>
              </div><!--/row-->
            </div><!--/span-->
          </div><!--/row-->
	</body>
</html>