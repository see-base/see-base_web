<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php ipAddCss('assets/css/bootstrap.css'); ?>
	<?php ipAddCss('assets/css/main.css'); ?>
	<?php echo ipHead(); ?>
	<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
	<title>STANLEY - Free Bootstrap Theme </title>
	<?php echo ipAddJs('assets/js/hover.zoom.js'); ?>
	<?php echo ipAddJs('assets/js/hover.zoom.conf.js'); ?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>
<body>
<!-- Static navbar -->
<div class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><?php echo ipSlot('logo'); ?></a>
		</div>
		<div class="navbar-collapse collapse ">

 

               <?php

               $menuOption=array(

                   'items'=>'menu1',

                   'attributes'=>array('class'=>'nav navbar-nav navbar-right')

               );

               echo ipSlot('menu',$menuOption);

               ?>

 

</div><!--/.nav-collapse -->
	</div>
</div>