<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<title><?php echo $template['title']; ?></title> 
		<?php include_once '_css.php'; ?>
		<style>
		    body{margin:0px; padding:0px;}
		</style>
        <?php include_once '_script.php'; ?>
	</head>
	<body> 
		<div id="container">
			<div class="inner"><?php echo $template['body']; ?></div>
		</div> 
		<div id="footer"></div> 
	</body>
</html>