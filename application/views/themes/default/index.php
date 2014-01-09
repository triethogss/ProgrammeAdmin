<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>	
	<?php echo Assets::css(); ?>
</head>
<body>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper" class="wrap page-container">
	<?php 
	    echo theme_view('general/header'); 
	?>	
	<div id="page-wrapper" class="container">	
    	<div class="row">    	
	    	<div class="col-lg-12">
				<h1><?php echo $title; ?></h1>
				<?php echo theme_view('general/alert'); ?>
			    <hr>
			</div>
		</div><!-- /.row -->
		<div class="row">
				<?php echo Template::yield(); ?>
		</div><!-- /.row -->
	</div><!-- /#page-wrapper -->
</div>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<?php echo Assets::js(); ?>
</body>
</html>