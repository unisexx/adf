<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<title><?php echo $template['title']; ?></title> 
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="media/bootstrap/css/bootstrap-responsive.min.css" type="text/css">
        <link rel="stylesheet" href="media/css/pagination.css" type="text/css">
		<link rel="stylesheet" href="themes/admin/media/css/stylesheet.css" type="text/css" media="screen" charset="utf-8" />
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="media/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="media/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="themes/admin/media/js/default.js"></script>
		<?php echo $template['metadata']; ?>
		
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
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