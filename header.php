<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title><?php bloginfo( 'name' ); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="keywords" content="web,designer,developer,auckland,japan market, " />
<link rel="shortcut icon" type="image/ico" href="http://heymasa.co.nz/wp-content/uploads/heymasa-fav.ico" />

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- /BOOTSTRAP -->

<!-- css -->
<link href="<?php echo get_stylesheet_uri(); ?>" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
<link href="css/twentytwenty.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/myscripts.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.js"></script>
<script type="text/javascript" src="js/jquery.event.move.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script type="text/javascript" src="js/jquery.twentytwenty.js"></script>

<script type="text/javascript" src='js/jquery.transit.js'></script>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77866048-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<section id="container">
	<header id="header">
		<div class="center menu-collapsed">
			<h1><a href="#" title="Masa Yanagida - Web designer/developer"><img class="bar" src="img/my-logo3.png" alt="Hey Masa - logo"></a></h1>
		<!-- menu -->
		<nav>
			<ul>
				<li><a href="#home" title="" data-scroll>Home</a></li>
				<li><a href="#design" title="" data-scroll>What I do</a></li>
				<li><a href="#about" title="" data-scroll>About</a></li>
				<li><a href="#portfolio" title="" data-scroll>Portfolio</a></li>
				<li><a href="#contact" title="" data-scroll>Contact</a></li>
				<li><a href="https://www.facebook.com/masashi.yanagida.7" title=""><i class="fa fa-facebook"></i></a></li>
				<li><a href="mailto:info@heymasa.co.nz" title=""><i class="fa fa-envelope-o"></i></a></li>
			</ul>
		</nav>
		</div>
	</header><!-- /header -->
